<?php

use PHPUnit\Framework\TestCase;

class WeatherMonitorTest extends TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    /**
     * using php mock first
     */
    public function testCorrectAverageIsReturned()
    {
        //create mock obj
        //createMock method does not work on non-existence obj
//        $service = $this->createMock(TemperatureService::class);
        $service = $this->getMockBuilder('TemperatureService')
                        ->setMethods(['getTemperature'])
                        ->getMock();
        //value map associate argument with return values
        $map = [
            ['12:00', 20],
            ['14:00', 26]
        ];

        //Add content into the mock obj
        $service->expects($this->exactly(2))
                ->method('getTemperature')
                ->will($this->returnValueMap($map));

        //pass in the dependency
        $weather = new WeatherMonitor($service);

        //call the getAverageTemp method and the assert
        $this->assertEquals(23, $weather->getAverageTemperature('12:00', '14:00'));

    }
}
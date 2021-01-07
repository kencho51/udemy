<?php

use PHPUnit\Framework\TestCase;

class WeatherMonitorTest extends TestCase
{
    public function tearDown(): void
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

    public function testCorrectAverageIsReturnedWithMockery()
    {
        $service = Mockery::mock(TemperatureService::class);

        $service->shouldReceive('getTemperature')->once()->with('12:00')->andReturn(20);
        $service->shouldReceive('getTemperature')->once()->with('14:00')->andReturn(26);

        $weather = new WeatherMonitor($service);
        $this->assertEquals(23, $weather->getAverageTemperature('12:00', '14:00'));
    }
}
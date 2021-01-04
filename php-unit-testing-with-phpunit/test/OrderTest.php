<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    /**
     * One way to include mockery
     */
    public function tearDown()
    {
        Mockery::close();
    }

    public function testOrderIsProcessed()
    {
//        $gateway = new PaymentGateway; //will not work, as PaymentGate does not exist
//        $gateway = $this->createMock('PaymentGateway'); //createMock cannot mock on non existence class
        /**
         * @returns null
         */
        $gateway = $this->getMockBuilder('PaymentGateway')
                        ->setMethods(['charge']) //pass in array of a method name
                        ->getMock();

        //Configure the mock object return true
        //Set the expectation
        $gateway->expects($this->once())
                ->method('charge')
                ->with($this->equalTo(200))
                ->willReturn(true);

        $order = new Order($gateway); //Create object and pass in dependency
        $order->amount = 200;
        $this->assertTrue($order->process());
    }

    public function testOrderIsProcessedUsingMockery()
    {
        $gateway = Mockery::mock('PaymentGateway');
        $gateway->shouldReceive('charge')
                ->once()
                ->with(200)
                ->andReturn(true);

        $order = new Order($gateway); //Create object and pass in dependency
        $order->amount = 200;
        $this->assertTrue($order->process());
    }
}
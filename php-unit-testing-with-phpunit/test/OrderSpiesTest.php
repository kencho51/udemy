<?php

use PHPUnit\Framework\TestCase;

class OrderSpiesTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    /**
     * Setting expectation before the code interact with the mock is called.
     */
    public function testOrderIsProcessedUsingMock()
    {
        $order = new OrderSpies(3, 1.99);
        $this->assertEquals(5.97, $order->amount);

        $gateway_mock = Mockery::mock('PaymentGateway');
        $gateway_mock->shouldReceive('charge')
                     ->once()
                     ->with(5.97);

        $order->process($gateway_mock);
    }


    /**
     * Using spy to test for what happened after the code and test is called, and not before
     * In some cases, this can be clearer and require less code than Mock
     * Downside is it cannot specify a return value for a stubbed method called
     */
    public function testOrderIsProcessedUsingSpy()
    {
        $order = new OrderSpies(3, 1.99);
        $this->assertEquals(5.97, $order->amount);

        $gateway_spy = Mockery::spy('PaymentGateway');
        $order->process($gateway_spy);

        $gateway_spy->shouldHaveReceived('charge')
                    ->once()
                    ->with(5.97);

    }
}
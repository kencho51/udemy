<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
//        $mailer = new Mailer;
        /**
         * Create the mock version of the object, to remove dependency
         * doing nothing, no time delay
         */
        $mock = $this->createMock(Mailer::class); //mock object returns null
        $mock->method('sendMessage')->willReturn(true);
        $result = $mock->sendMessage('dave@ecample.com', 'Hello');
        $this->assertTrue($result);
    }

}
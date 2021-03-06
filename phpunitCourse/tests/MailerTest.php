<?php

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{

    public function testSendMessgeReturnsTrue()
    {
        $this->assertTrue(Mailer::send('send@example.com', 'Hello'));
    }


    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);
        Mailer::send('','Hello');
    }
}
<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new User('dave@example.com');

        // $mailer = new Mailer;

        //Create a mock object which will lead to error/warning
        //because PHPUnit framework cannot stub static methods
        //you can only stub instance method
//        $mailer = $this->createMock(Mailer::class);

        //Injecting the dependency
//        $user->setMailer($mailer);

        $this->assertTrue($user->notify('Hello!'));
    }
}
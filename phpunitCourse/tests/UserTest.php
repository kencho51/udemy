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

        //Create mock mailer object and inject into user object using setter method
//        $mailer = $this->createMock(Mailer::class);
//        $mailer->expects($this->once())
//               ->method('send')
//               ->willReturn(true);
//
//        $user->setMailer($mailer);
//
        //Create annonymous function for the static object
        $user->setMailerCallable(function ()
        {
            echo "mocked";
            return true;
        });
        $this->assertTrue($user->notify('Hello!'));
    }
}
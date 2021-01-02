<?php

use \PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        $user = new User;
        $user->first_name = "Peter";
        $user->surname = "Green";

        $this->assertEquals('Peter Green', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;
        $this->assertEquals('', $user->getFullName());
    }

    /**
     * @test
     * add doc block to allow the test
     */
    public function user_has_first_name()
    {
        $user = new User;
        $user->first_name = "Peter";
        $this->assertEquals('Peter', $user->first_name);
    }

    public function testNotificationIsSent()
    {
        $user = new User;

        /**
         * To create mock mailer class to test
         * but it will not work, as mailer object is hardcoded in the user class
         */
        $mock_mailer = $this->createMock(Mailer::class);
        $mock_mailer->method('sendMessage')->willReturn(true);

        /**
         * Here shows how do we tell the User class to use the mock?
         * Dependency Injection
         */

//        $user->setMailer(new Mailer); //Real Mailer object
        $user->setMailer($mock_mailer);//Pass in the mock Mailer object

        $user->email = 'dave@example.com';
        $this->assertTrue($user->notify("Hello")); //this will delay for 3s.
    }

}
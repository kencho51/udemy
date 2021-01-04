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
         * To create mock mailer class to test, without relaying on a real object
         * with matcher method
         * with with method
         */
        $mock_mailer = $this->createMock(Mailer::class); // default return is null.
        $mock_mailer->expects($this->once())
                    ->method('sendMessage')
                    ->with($this->equalTo('dave@example.com'), $this->equalTo('Hello'))
                    ->willReturn(true);

        /**
         * Here shows how do we tell the User class to use the mock?
         * Dependency Injection
         */

//        $user->setMailer(new Mailer); //Real Mailer object
        $user->setMailer($mock_mailer);//Pass in the mock Mailer object

        $user->email = 'dave@example.com';
        $this->assertTrue($user->notify("Hello")); //this will delay for 3s.
    }

    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User;

        //getMockBuilder to get the actual mock object
        $mock_mailer = $this->getMockBuilder(Mailer::class)
                            ->setMethods(null) //execute the original code, if method passed in as array, ['sendMessage'], will be stubbed
                            ->getMock();

        $user->setMailer($mock_mailer);
        $this->expectException(Exception::class);
        $user->notify("Hello");
    }
}
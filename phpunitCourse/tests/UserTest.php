<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testNotifyReturnsTrue()
    {
        $user = new User('dave@example.com');

        //Alias method is not recommended
        $mock = Mockery::mock('alias:Mailer');

        $mock->shouldReceive('send')
            ->once()
            ->with($user->email, 'Hello')
            ->andReturn(true);

        $this->assertTrue($user->notify('Hello'));
    }
}
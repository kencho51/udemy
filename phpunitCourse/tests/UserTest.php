<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new User('dave@example.com');
        $this->assertTrue($user->notify('Hello'));
    }
}
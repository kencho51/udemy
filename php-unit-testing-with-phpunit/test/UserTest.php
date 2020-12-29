<?php

use \PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        require 'User.php';

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
}
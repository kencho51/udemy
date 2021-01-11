<?php

use PHPUnit\Framework\TestCase;

class AbstractPersonTest extends TestCase
{
    public function testNameAndTitleIsReturned()
    {
        //Create child class of the abstract class and run test on that
        $doctor = New Doctor('Green');

        $this->assertEquals('Dr. Green', $doctor->getNameAndTitle());
    }
}
<?php

use PHPUnit\Framework\TestCase;

class AbstractPersonTest extends TestCase
{
    //Create child class of the abstract class and run test on that
    public function testNameAndTitleIsReturned()
    {
        $doctor = New Doctor('Green');

        $this->assertEquals('Dr. Green', $doctor->getNameAndTitle());
    }

    //Alternatively, use getMockBuilder method
    public function testNameAndTitleIncludesValueFromGetTitle()
    {
        $mock = $this->getMockBuilder(AbstractPerson::class)
                    ->setConstructorArgs(['Green'])
                    ->getMockForAbstractClass();

        //Mock the abstract method and return the default value
        $mock->method('getTitle')
            ->willReturn('Dr.');

        $this->assertEquals('Dr. Green', $mock->getNameAndTitle());
    }

}
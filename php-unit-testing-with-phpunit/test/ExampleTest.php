<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddingTwoPlusGetFour()
    {
        $this->assertEquals(4, 2 + 2);
    }

    /**
     * Quiz 1 solution
     */
    public function testTrueIsTrue ()
    {
        $this->assertTrue(true, 'Test true msg.');
    }
}
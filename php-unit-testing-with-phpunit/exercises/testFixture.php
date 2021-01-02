<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    protected static $array;

    protected function setUp(): void
    {
        static::$array = ['one'];
    }

    public function testArrayInitiallyHasOneItem()
    {

        $this->assertNotEmpty(static::$array);
        $this->assertEquals("one", static::$array[0]);
    }

    public function testCanAddItemToArray()
    {

        static::$array[] = "two";

        $this->assertEquals("two", static::$array[1]);
        $this->assertCount(2, static::$array);
    }
}


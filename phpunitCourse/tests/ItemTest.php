<?php

use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item;
        $this->assertNotEmpty($item->getDescription());
    }

    public function testIDisAnInteger()
    {
        $item = new ItemChild();
        $this->assertIsInt($item->getID());
    }

    //Usually dont test private method which mostly used for internal implementation, so shouldn't be really tested
    //If necessary, have to use reflection
    public function testTokenIsAString()
    {
        $item = new Item();

        //Create a reflector object
        $reflector = new ReflectionClass(Item::class);
        $method = $reflector->getMethod('getToken');

        //Make the private method accessible
        $method->setAccessible(true);

        //Pass in object that we are reflecting
        //Item object will be created at the top of the test method
        $result = $method->invoke($item);

        $this->assertIsString($result);
    }

    public function testPrefixedTokenStartsWithPrefix()
    {
        $item = new Item();
        $reflector = new ReflectionClass(Item::class);
        $method = $reflector->getMethod('getPrefixedToken');
        $method->setAccessible(true);

        $result = $method->invokeArgs($item, ['example']);

        $this->assertStringStartsWith('example', $result);
    }
}
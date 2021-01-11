<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testIDisAnInteger()
    {
        $product = new Product;
        $this->assertIsInt($product->product_id);
    }



}
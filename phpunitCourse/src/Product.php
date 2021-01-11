<?php

class Product
{
    /**
     * Unique identifier
     * @var integer
     */
    protected $product_id;

    /**
     * Product constructor.
     * return void
     */
    public function __construct()
    {
        $this->product_id = rand();
    }
}

<?php

/**
 * Class Item
 */
class Item 
{
    /**
     * Get the description
     *
     * @return integer A random number
     */
    public function getDescription()
    {
        return $this->getID() . $this->getToken();
    } 

    /**
     * Get a random ID
     *
     * @return integer The ID
     */    
    protected function getID()
    {
        return rand();
    }

    /**
     * Get a random token
     */
    private function getToken()
    {
        return uniqid();
    }
}
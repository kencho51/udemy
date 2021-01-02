<?php


class queue
{
    /**
     * Queue items
     * @var array
     */
    protected $items = [];

    /**
     * Add item to the end of the queue
     * @param $item
     */
    public function push($item)
    {
        $this->items[] = $item;
    }

    /**
     * Take an item from the head of the queue
     * @return mixed
     */
    public function pop()
    {
        return array_shift($this->items);
    }

    /**
     * Count the total number of the queue
     * @return int
     */
    public function getCount()
    {
        return count($this->items);
    }

    public function clear()
    {
        $this->items = [];
    }
}
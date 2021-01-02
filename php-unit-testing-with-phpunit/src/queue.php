<?php


class queue
{
    /**
     * Maximum number of items in the queue
     * @var integer
     */
    public const MAX_ITEMS = 5;

    /**
     * Queue items
     * @var array
     */
    protected $items = [];

    /**
     * Add item to the end of the queue
     * @param $item
     *
     * @throws QueueException if the number of items in the queue exceeds the MAX_ITEMS
     */
    public function push($item)
    {
        if ($this->getCount() == static::MAX_ITEMS) {
            throw new QueueException("Queue is full");
        }
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
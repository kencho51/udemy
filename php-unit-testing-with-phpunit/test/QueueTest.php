<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue;
        $this->assertEquals(0, $queue->getCount());
        return $queue;
    }

    /**
     * Consumer of 1st function and producer of 3rd function
     * @depends testNewQueueIsEmpty
     * @param Queue $queue
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue)
    {
        $queue->push('green');
        $this->assertEquals(1, $queue->getCount());
        return $queue;
    }

    /**
     * Consumer of 2nd function
     * @depends testAnItemIsAddedToTheQueue
     * @param Queue $queue
     */
    public function testAnItemIsRemovedFromTheQueue(Queue $queue)
    {
        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());
        $this->assertEquals('green', $item);
    }
}
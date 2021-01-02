<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected static $queue;

    /**
     * will be run before every single test function
     */
    protected function setUp(): void
    {
        static::$queue->clear();
    }

    /**
     * will be run before the first test function of the class
     * not resource intensive, connect to msg queue server, for example
     *
     */
    public static function setUpBeforeClass(): void
    {
        static::$queue = new Queue;
    }

    /**
     * will be run after the last test function of the class
     * disconnect from the server
     */
    public static function tearDownAfterClass(): void
    {
        static::$queue = null;
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        static::$queue->push('green');
        $this->assertEquals(1, static::$queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue()
    {
        static::$queue->push('green');
        $item = static::$queue->pop();

        $this->assertEquals(0, static::$queue->getCount());
        $this->assertEquals('green', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        static::$queue->push('first');
        static::$queue->push('second');

        $this->assertEquals('first', static::$queue->pop());
    }

    public function testMaxNumberOfItemsCanBeAdded()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            static::$queue->push($i);
        }
        $this->assertEquals(Queue::MAX_ITEMS, static::$queue->getCount());
    }

    public function testExceptionThrownWhenAddingAnItemToAFullQueue()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            static::$queue->push($i);
        }
        $this->expectException(QueueException::class);
        $this->expectExceptionMessage('Queue is full');
        static::$queue->push('The 6th item');

    }
}
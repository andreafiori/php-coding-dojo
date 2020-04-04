<?php

namespace tests\data_structures\queue;

use PHPUnit\Framework\TestCase;
use data_structures\queue\Queue;

class QueueTest extends TestCase
{
    /**
     * @var Queue
     */
    private $queue;

    protected function setUp(): void
    {
        parent::setUp();

        $this->queue = new Queue();
        $this->queue->enqueue(10);
        $this->queue->enqueue(15);
    }

    public function testIsNotEmpty()
    {
        $this->assertFalse( $this->queue->isEmpty() );
    }

    public function testDequeueReturnValue()
    {
        $this->assertEquals($this->queue->dequeue(), 10);
    }

    public function testDequeueAllItems()
    {
        $this->queue->dequeue();
        $this->queue->dequeue();

        $this->assertTrue( $this->queue->isEmpty() );
    }

    public function testPeek()
    {
        $this->queue->dequeue();

        $this->assertEquals($this->queue->peek(), 15);
    }
}

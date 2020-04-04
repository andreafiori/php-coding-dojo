<?php

namespace tests\data_structures\stack;

use PHPUnit\Framework\TestCase;
use data_structures\stack\Stack;

class QueueTest extends TestCase
{
    /**
     * @var Stack
     */
    private $stack;

    protected function setUp(): void
    {
        parent::setUp();

        $this->stack = new Stack();
        $this->stack->push(10);
        $this->stack->push(15);
    }

    public function testIsNotEmpty()
    {
        $this->assertFalse( $this->stack->isEmpty() );
    }

    public function testPeek()
    {
        $this->assertEquals($this->stack->peek(), 15);
    }

    public function testPopReturnValue()
    {
        $this->assertEquals($this->stack->pop(), 15);
    }

    public function testPopAllElements()
    {
        $this->stack->pop();
        $this->stack->pop();

        $this->assertTrue( $this->stack->isEmpty() );
    }
}

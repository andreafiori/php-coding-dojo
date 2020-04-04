<?php

namespace tests\algorithms\math;

use PHPUnit\Framework\TestCase;
use algorithms\math\Fibonacci;

class FibonacciTest extends TestCase
{
    public function testCalculate()
    {
        $this->assertEquals( Fibonacci::calculate(10), 55 );
    }

    public function testCalculateThrowsException()
    {
        $this->expectException( \InvalidArgumentException::class );

        Fibonacci::calculate(-1);
    }

    /**
     * @throws \InvalidArgumentException
     */
    public function testGetSequence()
    {
        $this->assertEquals(Fibonacci::getSequence(4), [1, 1, 2, 3]);
    }

    public function testGetSequenceReturnsZero()
    {
        $this->assertEquals(Fibonacci::getSequence(-1), 0);
    }
}
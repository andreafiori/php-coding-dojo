<?php

namespace tests\algorithms\math;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use algorithms\math\Fibonacci;

class FibonacciTest extends TestCase
{
    public static function fibonacciSequenceDataProvider(): array
    {
        return [
            'index zero' => [0, 0],
            'index one' => [1, 1],
            'index two' => [2, 1],
            'index ten' => [10, 55],
            'index twenty five' => [25, 75025],
        ];
    }

    #[DataProvider('fibonacciSequenceDataProvider')]
    public function testGetReturnsTheExpectedFibonacciNumber(int $index, int $expected): void
    {
        $this->assertSame($expected, Fibonacci::get($index));
    }

    public function testRangeReturnsTheSequenceUpToAndIncludingTheIndex(): void
    {
        $this->assertSame([0, 1, 1, 2, 3, 5, 8], Fibonacci::range(6));
    }

    public function testRangeWithIndexOne(): void
    {
        $this->assertSame([0, 1], Fibonacci::range(1));
    }

    public function testNegativeIndexIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        Fibonacci::get(-1);
    }
}

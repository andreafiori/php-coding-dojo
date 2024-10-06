<?php

namespace tests\codility\counting_elements;

use codility\counting_elements\MaxCounters;
use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use tests\utils\TestsPerformance;

class MaxCountersTest extends TestCase
{
    use TestsAcceptance, TestsPerformance;

    protected function setUp(): void
    {
        $this->fixture = new MaxCounters();
    }

    public static function performanceProvider(): array
    {
        $size = 2120;
        return [
            [
                [$size, array_fill(1, $size, rand(1, $size)), array_fill(1, $size, 1)], 0.06
            ]
        ];
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [1, [1]], [1]
            ],
            [
                [1, [1, 1]], [2]
            ],
            [
                [2, [1, 2]], [1, 1]
            ],
            [
                [2, [1, 2, 1]], [2, 1]
            ],
            [
                [2, [2, 2]], [0, 2]
            ],
            [
                [1, [2]], [0]
            ],
            [
                [1, [1, 2]], [1]
            ],
            [
                [2, [3]], [0, 0]
            ],
            [
                [2, [1, 3]], [1, 1]
            ],
            [
                [2, [1, 3, 1]], [2, 1]
            ],
            [
                [3, [1, 4, 1]], [2, 1, 1]
            ]
        ];
    }
}

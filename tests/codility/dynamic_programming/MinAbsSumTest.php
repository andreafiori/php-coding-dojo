<?php

namespace tests\codility\dynamic_programming;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\dynamic_programming\MinAbsSum;

class MinAbsSumTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MinAbsSum();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[]], 0
            ],
            [
                [[1, 2, 5]], 2
            ],
            [
                [[1, 5, 2, -2]], 0
            ],
            [
                [[-10, 10, 10, -40, 20]], 10
            ],
            [
                [[-1, -1, -1]], 1
            ]
        ];
    }
}

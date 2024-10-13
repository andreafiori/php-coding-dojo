<?php

namespace tests\codility\sorting;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\sorting\MaxProductOfThree;

class MaxProductOfThreeTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MaxProductOfThree();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1, 3, 5]], 15
            ],
            [
                [[-1, 1, 2, 3]], 6
            ],
            [
                [[-3, 0, 1, 2]], 0
            ],
            [
                [[-5, -4, 1, 2, 3]], 60
            ],
            [
                [[-100, -1, 35, 40, 58]], 81200
            ],
            [
                [[-10, -3, -2, 1, 6, 8]], 240
            ]
        ];
    }
}

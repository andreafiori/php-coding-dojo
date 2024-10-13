<?php

namespace tests\codility\maximum_slice_problem;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\maximum_slice_problem\MaxDoubleSliceSum;

class MaxDoubleSliceSumTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MaxDoubleSliceSum();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1, 2, 3]], 0
            ],
            [
                [[1, 2, -1, 5]], 2
            ],
            [
                [[3, 2, 6, -1, 4, 5, -1, 2]], 17
            ],
            [
                [[-1, -1, 2, 6, -1, 4, 5, 100]], 17
            ],
            [
                [[0, 1, 2, 2, 2, 1, 2, 100]], 9
            ],
            [
                [[0, 0, 2, 2, 2, 0, 2, 100]], 8
            ],
            [
                [[5, 0, 1, 0, 5]], 1
            ],
            [
                [[1, 0, 0, 0, 0, 1]], 0
            ],
            [
                [[10, -1, -2, -1, -1, 10]], 0
            ],
            [
                [[0, 10, -5, -2, 0]], 10
            ]
        ];
    }
}

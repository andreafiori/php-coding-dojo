<?php

namespace tests\codility\sorting;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\sorting\Triangle;

class TriangleTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Triangle();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[]], 0
            ],
            [
                [[1]], 0
            ],
            [
                [[1, 2]], 0
            ],
            [
                [[1, 2, 3]], 0
            ],
            [
                [[10, 5, 8]], 1
            ],
            [
                [[2,2,3]], 1
            ],
            [
                [[-1, 0, -100, 3, 2, 1]], 0
            ]
        ];
    }
}

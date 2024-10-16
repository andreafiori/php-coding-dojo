<?php

namespace tests\codility\caterpillar_method;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\caterpillar_method\CountTriangles;

class CountTrianglesTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CountTriangles();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[]], 0
            ],
            [
                [[10, 2, 5]], 0
            ],
            [
                [[10, 5, 8]], 1
            ],
            [
                [[10, 2, 5, 8]], 1
            ],
            [
                [[10, 2, 5, 1, 8, 12]], 4
            ],
            [
                [[1, 20, 30, 40, 50, 60]], 7
            ]
        ];
    }
}

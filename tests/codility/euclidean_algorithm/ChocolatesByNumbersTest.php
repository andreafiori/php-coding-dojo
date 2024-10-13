<?php

namespace tests\codility\euclidean_algorithm;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\euclidean_algorithm\ChocolatesByNumbers;

class ChocolatesByNumbersTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new ChocolatesByNumbers();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [1, 1], 1
            ],
            [
                [10, 4], 5
            ],
            [
                [20, 4], 5
            ],
            [
                [21, 21], 1
            ],
            [
                [23, 21], 23
            ],
            [
                [25, 5], 5
            ],
            [
                [100, 3], 100
            ],
            [
                [1000, 5], 200
            ],
            [
                [10000, 17], 10000
            ]
        ];
    }
}

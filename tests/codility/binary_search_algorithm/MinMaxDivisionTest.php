<?php

namespace tests\codility\binary_search_algorithm;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\binary_search_algorithm\MinMaxDivision;

class MinMaxDivisionTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MinMaxDivision();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [1, 5, [5]], 5
            ],
            [
                [10, 5, [1, 2, 3, 4, 5]], 5
            ],
            [
                [2, 10, [4, 4]], 4
            ],
            [
                [3, 5, [2, 1, 5, 1, 2, 2, 2]], 6
            ]
        ];
    }
}

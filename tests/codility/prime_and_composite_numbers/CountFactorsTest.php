<?php

namespace tests\codility\prime_and_composite_numbers;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\prime_and_composite_numbers\CountFactors;

class CountFactorsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CountFactors();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [1], 1
            ],
            [
                [2], 2
            ],
            [
                [3], 2
            ],
            [
                [4], 3
            ],
            [
                [5], 2
            ],
            [
                [10], 4
            ],
            [
                [16], 5
            ],
            [
                [24], 8
            ],
            [
                [36], 9
            ],
            [
                [41], 2
            ],
            [
                [42], 8
            ]
        ];
    }
}

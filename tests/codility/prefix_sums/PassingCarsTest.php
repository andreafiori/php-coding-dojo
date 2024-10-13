<?php

namespace tests\codility\prefix_sums;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\prefix_sums\PassingCars;

class PassingCarsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new PassingCars();
    }

    public static function bigData()
    {
        return array_map(function ($index) {
            return $index % 2 == 1 ? 0 : 1;
        }, range(1, 100000));
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
                [[0]], 0
            ],
            [
                [[0,1]], 1
            ],
            [
                [[1, 0, 1]], 1
            ],
            [
                [[1, 0, 1, 0, 1]], 3
            ],
            [
                [self::bigData()], -1
            ]
        ];
    }
}

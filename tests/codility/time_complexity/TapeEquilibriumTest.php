<?php

namespace tests\codility\time_complexity;

use tests\utils\TestsAcceptance;
use PHPUnit\Framework\TestCase;
use codility\time_complexity\TapeEquilibrium;

class TapeEquilibriumTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new TapeEquilibrium();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1, 2]],
                1
            ],
            [
                [[1, -3, 2]],
                2
            ],
            [
                [[1, 2, 4, 2]],
                3
            ],
            [
                [[3, 1, 2, 4, 3]],
                1
            ]
        ];
    }
}

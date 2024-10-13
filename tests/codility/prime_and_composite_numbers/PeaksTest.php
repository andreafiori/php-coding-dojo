<?php

namespace tests\codility\prime_and_composite_numbers;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\prime_and_composite_numbers\Peaks;

class PeaksTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Peaks();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 0
            ],
            [
                [[0, 1, 0, 0, 1, 0]], 2
            ],
            [
                [[0, 1, 0, 1, 0, 0, 1, 0]], 2
            ],
            [
                [array_fill(0, 1000, 0)], 0
            ],
            [
                [[0, 1, 0, 0, 0, 0, 0]], 1
            ],
            [
                [[0, 1, 0, 0, 1, 0, 0, 1, 0]], 3
            ],
            [
                [[0, 2, 1, 1, 1, 1, 2, 0]], 2
            ]
        ];
    }
}

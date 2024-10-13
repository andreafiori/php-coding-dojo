<?php

namespace tests\codility\prime_and_composite_numbers;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\prime_and_composite_numbers\Flags;

class FlagsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Flags();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 0
            ],
            [
                [[0, 1, 0]], 1
            ],
            [
                [[0, 1, 0, 1, 0]], 2
            ],
            [
                [[0, 1, 0, 0, 1, 0]], 2
            ],
            [
                [[0, 1, 0, 1, 0, 1, 0]], 2
            ],
            [
                [[0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0]], 3
            ],
            [
                [[0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0]], 4
            ]
        ];
    }
}

<?php

namespace tests\codility\prefix_sums;

use codility\prefix_sums\CountDiv;
use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;

class CountDivTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CountDiv();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [0, 1, 1], 2
            ],
            [
                [1, 16, 5], 3
            ],
            [
                [0, 16, 5], 4
            ],
            [
                [100, 116, 5], 4
            ],
            [
                [101, 116, 5], 3
            ]
        ];
    }
}

<?php

namespace tests\codility\greedy_algorithms;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\greedy_algorithms\TieRopes;

class TieRopesTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new TieRopes();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [10, [5]], 0
            ],
            [
                [5, [5]], 1
            ],
            [
                [10, [5, 3, 2, 1]], 1
            ],
            [
                [4, [1, 2, 3, 4, 1, 1, 3]], 3
            ]
        ];
    }
}

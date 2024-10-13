<?php

namespace tests\codility\leader;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\leader\EquiLeader;

class EquiLeaderTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new EquiLeader();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 0
            ],
            [
                [[1, 0]], 0
            ],
            [
                [[1, 0, 2]], 0
            ],
            [
                [[1, 1]], 1
            ],
            [
                [[1, 0, 1, 1, 1]], 3
            ],
            [
                [[0, 1, 1, 1, 0, 1, 1, 0]], 2
            ],
            [
                [[4, 3, 4, 4, 4, 2]], 2
            ]
        ];
    }
}

<?php

namespace tests\codility\stacks_and_queues;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\stacks_and_queues\StoneWall;

class StoneWallTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new StoneWall();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 1
            ],
            [
                [[5, 4, 3]], 3
            ],
            [
                [[8, 8, 8, 8]], 1
            ],
            [
                [[8, 8, 9, 8, 8]], 2
            ],
            [
                [[8, 8, 5, 7, 9, 8, 7, 4, 8]], 7
            ]
        ];
    }
}

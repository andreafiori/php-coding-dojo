<?php

namespace tests\codility\stacks_and_queues;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\stacks_and_queues\Fish;

class FishTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Fish();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1], [0]], 1
            ],
            [
                [[1, 2], [1, 0]], 1
            ],
            [
                [[1, 2, 3], [1, 0, 0]], 2
            ],
            [
                [[1, 2, 3], [1, 0, 1]], 2
            ],
            [
                [[1, 2, 3, 4], [1, 0, 1, 1]], 3
            ],
            [
                [[5, 1, 2], [1, 1, 0]], 1
            ],
            [
                [[5, 1, 2, 6], [1, 1, 0, 0]], 1
            ]
        ];
    }
}

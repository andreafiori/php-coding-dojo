<?php

namespace tests\codility\time_complexity;

use \PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\time_complexity\FrogJump;

class FrogJumpTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new FrogJump();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [1, 2, 1],
                1
            ],
            [
                [10, 85, 30],
                3
            ]
        ];
    }
}

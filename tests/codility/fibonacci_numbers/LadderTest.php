<?php

namespace tests\codility\fibonacci_numbers;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\fibonacci_numbers\Ladder;

class LadderTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Ladder();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[0], [0]], [0],
            ],
            [
                [[1], [1]], [1],
            ],
            [
                [[2, 3, 4, 5], [2, 3, 4, 5]], [2, 3, 5, 8]
            ],
            [
                [[4, 4, 5, 5, 1], [3, 2, 4, 3, 1]], [5, 1, 8, 0, 1]
            ]
        ];
    }
}

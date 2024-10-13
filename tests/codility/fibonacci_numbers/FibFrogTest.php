<?php

namespace tests\codility\fibonacci_numbers;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\fibonacci_numbers\FibFrog;

class FibFrogTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new FibFrog();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[0, 0, 0]], -1
            ],
            [
                [[0]], 1
            ],
            [
                [[0, 0, 1]], 2
            ],
            [
                [[1, 0, 1, 0, 1, 0, 0, 0, 0, 0]], 2
            ],
            [
                [[0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0]], 3
            ]
        ];
    }
}

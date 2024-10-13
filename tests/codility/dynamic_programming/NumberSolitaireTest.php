<?php

namespace tests\codility\dynamic_programming;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\dynamic_programming\NumberSolitaire;

class NumberSolitaireTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new NumberSolitaire();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[0, 1]], 1
            ],
            [
                [[0, -1, 0]], 0
            ],
            [
                [[1, -2, 0, 9, -1, -2]], 8
            ]
        ];
    }
}

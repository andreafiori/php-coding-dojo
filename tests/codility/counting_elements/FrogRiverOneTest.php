<?php

namespace tests\codility\counting_elements;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\counting_elements\FrogRiverOne;

class FrogRiverOneTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new FrogRiverOne();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [5, [1]], -1
            ],
            [
                [1, [0]], -1
            ],
            [
                [1, [1]], 0
            ],
            [
                [1, [0, 1]], 1
            ],
            [
                [2, [2, 1]], 1
            ],
            [
                [3, [1, 3, 2]], 2
            ],
            [
                [2, [1, 1, 1, 1, 2, 1, 1, 1]], 4
            ]
        ];
    }
}

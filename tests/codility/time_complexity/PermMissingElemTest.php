<?php

namespace tests\codility\time_complexity;

use codility\time_complexity\PermMissingElem;
use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;

class PermMissingElemTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new PermMissingElem();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[2, 3, 1, 5]],
                4
            ],
            [
                [[1, 3]],
                2
            ],
            [
                [[1, 4, 5, 6, 2]],
                3
            ],
            [
                [[1, 2, 3, 4, 6]],
                5
            ],
            [
                [[2, 3, 4, 5]],
                1
            ],
            [
                [[1, 2, 3, 4, 6]],
                5
            ],
            [
                [[1]],
                2
            ],
            [
                [[1, 2, 3]],
                4
            ]
        ];
    }
}

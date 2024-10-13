<?php

namespace tests\codility\caterpillar_method;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\caterpillar_method\AbsDistinct;

class AbsDistinctTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new AbsDistinct();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1]], 1
            ],
            [
                [[1, 1, 1, 1, 1]], 1
            ],
            [
                [[1, 2, 3, 3]], 3
            ],
            [
                [[-1, 0, 1, 2]], 3
            ],
            [
                [[-5, -3, -1, 0, 3, 6]], 5
            ]
        ];
    }
}

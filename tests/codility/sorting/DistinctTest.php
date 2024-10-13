<?php

namespace tests\codility\sorting;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\sorting\Distinct;

class DistinctTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Distinct();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[0]], 1,
            ],
            [
                [[0,1]], 2
            ],
            [
                [[0,0]], 1
            ],
            [
                [[0,1, 1]], 2
            ],
            [
                [[0,1, 2]], 3
            ]
        ];
    }
}

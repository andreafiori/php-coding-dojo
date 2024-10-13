<?php

namespace tests\codility\leader;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\leader\Dominator;

class DominatorTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Dominator();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[]], -1
            ],
            [
                [[9]], 0
            ],
            [
                [[1, 1, 1]], 0
            ],
            [
                [[1, 2, 1]], 0
            ],
            [
                [[1, 1, 2, 2, 3]], -1
            ],
            [
                [[3, 4, 3, 2, 3, -1, 3, 3]], 0
            ]
        ];
    }
}

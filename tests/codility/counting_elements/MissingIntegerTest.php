<?php

namespace tests\codility\counting_elements;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\counting_elements\MissingInteger;

class MissingIntegerTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new MissingInteger();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[-1, -3]], 1
            ],
            [
                [[]], 1
            ],
            [
                [[1,2,3]], 4
            ],
            [
                [[-1,-2,1]], 2
            ],
            [
                [[-1,2,1,3,2,2,2,5]], 4
            ]
        ];
    }
}

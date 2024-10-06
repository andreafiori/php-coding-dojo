<?php

namespace tests\codility\counting_elements;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\counting_elements\PermCheck;

class PermCheckTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new PermCheck();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[0, 1]],
                0
            ],
            [
                [[1, 4]],
                0
            ],
            [
                [[1,2,3,5]],
                0
            ],
            [
                [[1,4,2]],
                0
            ],
            [
                [[1, 3, 3, 4]],
                0
            ],
            [
                [[1,2,3]],
                1
            ],
            [
                [[3,2,1]],
                1
            ],
            [
                [[1,3,2]],
                1
            ]
        ];
    }
}

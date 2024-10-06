<?php

namespace tests\codility\arrays;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\arrays\CyclicRotation;

class CyclicRotationTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CyclicRotation();
    }

    public function testSolutionReturnsRightResult()
    {
        $this->assertEquals(CyclicRotation::solution([3, 8, 9, 7, 6], 3), [9, 7, 6, 3, 8]);
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[1, 2, 3, 4], 0],
                [1, 2, 3, 4]
            ],
            [
                [[1], 1],
                [1]
            ],
            [
                [[1, 2, 3, 4, 5, 6, 7, 8, 9], 9],
                [1, 2, 3, 4, 5, 6, 7, 8, 9]
            ],
            [
                [[], 1],
                []
            ],
            [
                [[1, 2, 3], 1],
                [3, 1, 2]
            ],
            [
                [[1, 2, 3], 2],
                [2, 3, 1]
            ],
            [
                [[1, 2, 3, 4, 5, 6, 7], 3],
                [5, 6, 7, 1, 2, 3, 4]
            ]
        ];
    }
}

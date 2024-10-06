<?php

namespace tests\codility\iterations;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\iterations\BinaryGap;

class BinaryGapTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new BinaryGap();
    }

    public function testDoesNotContainBinaryGap() {
        $this->assertEquals( BinaryGap::solution(1), 0);
    }

    public function testDoesContainBinaryGapAsTrue() {
        $this->assertEquals( BinaryGap::solution(1041), 5);
    }

    public function testDoesContainBinaryGapAsFalse() {
        $this->assertNotEquals( BinaryGap::solution(5), 2 );
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [-1],
                0
            ],
            [
                [328],
                2
            ],
            [
                [bindec('10010001010')],
                3
            ],
            [
                [bindec('1000')],
                0
            ],
            [
                [bindec('10000010000000001')],
                9
            ],
            [
                [bindec('1001')],
                2
            ],
            [
                [bindec('10010')],
                2
            ],
            [
                [bindec('10001')],
                3
            ],
            [
                [bindec('1010')],
                1
            ],
            [
                [bindec('100000010')],
                6
            ],
            [
                [bindec('10000101010101010101001')],
                4
            ]
        ];
    }
}

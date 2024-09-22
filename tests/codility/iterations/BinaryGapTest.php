<?php

namespace tests\codility\iterations;

use PHPUnit\Framework\TestCase;
use codility\iterations\BinaryGap;

class BinaryGapTest extends TestCase
{
    public function testDoesNotContainBinaryGap() {
        $this->assertEquals( BinaryGap::solution(1), 0);
    }

    public function testDoesContainBinaryGapAsTrue() {
        $this->assertEquals( BinaryGap::solution(1041), 5);
    }

    public function testDoesContainBinaryGapAsFalse() {
        $this->assertNotEquals( BinaryGap::solution(5), 2 );
    }
}

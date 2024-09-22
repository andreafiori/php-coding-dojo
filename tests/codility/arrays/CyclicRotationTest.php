<?php

namespace tests\codility\arrays;

use PHPUnit\Framework\TestCase;
use codility\arrays\CyclicRotation;

class CyclicRotationTest extends TestCase
{
    public function testSolutionReturnsRightResult() {
        $this->assertEquals(CyclicRotation::solution([3, 8, 9, 7, 6], 3), [9, 7, 6, 3, 8]);
    }
}

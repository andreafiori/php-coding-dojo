<?php

namespace tests\codility\arrays;

use PHPUnit\Framework\TestCase;
use codility\arrays\OddOccurrencesInArray;

class OddOccurrencesInArrayTest extends TestCase
{
    public function testRSolutionFails() {
        $input = array(9, 3, 9, 3, 9, 7, 9);
        $this->assertNotEquals(OddOccurrencesInArray::solution($input), 5);
    }

    public function testReturnRightResult() {
        $input = array(9, 3, 9, 3, 9, 7, 9);
        $this->assertEquals(OddOccurrencesInArray::solution($input), 7);
    }
}

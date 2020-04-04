<?php

namespace tests\online\codility\arrays;

use PHPUnit\Framework\TestCase;
use online\codility\arrays\OddOccurrencesInArray;

class OddOccurrencesInArrayTest extends TestCase
{
    public function testSolution()
    {
        $this->assertEquals(OddOccurrencesInArray::solution([9, 3, 9, 3, 9, 7, 9]), 7);
    }
}
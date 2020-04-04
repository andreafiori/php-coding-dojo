<?php

namespace tests\online\codility\arrays;

use PHPUnit\Framework\TestCase;
use online\codility\arrays\CodilityDemo;

class CodilityDemoTest extends TestCase
{
    public function testDemo()
    {
        $test = [
            0 => -7,
            1 => 1,
            2 => 5,
            3 => 2,
            4 => -4,
            5 => 3,
            6 => 0,
        ];

        $this->assertEquals(CodilityDemo::equi($test), 3);
    }
}
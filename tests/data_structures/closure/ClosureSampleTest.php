<?php

namespace tests\data_structures\closure;

use PHPUnit\Framework\TestCase;
use data_structures\closure\ClosureSample;

class ClosureSampleTest extends TestCase
{
    public function testGetsFoo()
    {
        $cl1 = static function() {
            return ClosureSample::getsFoo();
        };

        $bcl1 = \Closure::bind($cl1, null, ClosureSample::class);

        $this->assertEquals($bcl1(), 1);
    }

    public function testGetiFoo()
    {
        $cl2 = function() {
            return ClosureSample::getiFoo();
        };

        $bcl2 = \Closure::bind($cl2, new ClosureSample(), ClosureSample::class);

        $this->assertEquals($bcl2(), 2);
    }
}

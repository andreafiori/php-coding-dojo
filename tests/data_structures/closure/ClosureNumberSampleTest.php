<?php

namespace tests\data_structures\closure;

use PHPUnit\Framework\TestCase;
use data_structures\closure\ClosureNumberSample;

class ClosureNumberSampleTest extends TestCase
{
    public function testMul()
    {
        $two = new ClosureNumberSample(2);

        $double = $two->mul();

        $x = \Closure::bind($double, null, ClosureNumberSample::class);

        $this->assertEquals($x(5),50);
    }
}

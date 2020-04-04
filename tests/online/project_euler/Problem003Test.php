<?php

namespace online\project_euler;

use PHPUnit\Framework\TestCase;

class Problem003Test extends TestCase
{
    public function testSolution()
    {
        $this->assertEquals(Problem0003::solution(12), 4);
        // $this->assertEquals(Problem0003::solution(600851475143), 6857); // True but too slow
    }
}

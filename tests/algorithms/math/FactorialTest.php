<?php

namespace tests\algorithms\math;

use PHPUnit\Framework\TestCase;
use algorithms\math\Factorial;

final class FactorialTest extends TestCase
{
    public function testFactorialRecursive()
    {
        $this->assertEquals(Factorial::getRecursive(5), 120);
    }

    public function testFactorialRecursiveThrowsException()
    {
        $this->expectException( \InvalidArgumentException::class );

        Factorial::getRecursive(-1);
    }

    public function testFactorialNonRecursive()
    {
        $this->assertEquals(Factorial::getNonRecursive(5), 120);
    }

    public function testFactorialNonRecursiveThrowsException()
    {
        $this->expectException( \InvalidArgumentException::class );

        Factorial::getNonRecursive(-1);
    }
}
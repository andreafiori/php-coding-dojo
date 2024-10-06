<?php

namespace tests\utils;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\DataProvider;

trait TestsAcceptance
{
    protected $fixture;

    #[Test]
    #[DataProvider('acceptanceProvider')]
    public function dhouldPassAcceptanceTests($params, $expected)
    {
        $actual = $this->fixture->solution(...$params);

        $this->assertEquals($expected, $actual);
    }

    abstract static public function acceptanceProvider(): array;
}

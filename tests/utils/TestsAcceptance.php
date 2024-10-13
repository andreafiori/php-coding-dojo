<?php

namespace tests\utils;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\DataProvider;

trait TestsAcceptance
{
    protected $fixture;

    #[Test]
    #[DataProvider('acceptanceProvider')]
    public function shouldPassAcceptanceTests($params, $expected)
    {
        $actual = $this->fixture->solution(...$params);

        // Create a detailed error message in case the test fails
        $errorMessage = sprintf(
            "Test failed for params: %s\nExpected: %s\nActual: %s",
            json_encode($params),
            json_encode($expected),
            json_encode($actual)
        );

        $this->assertEquals($expected, $actual, $errorMessage);
    }

    abstract static public function acceptanceProvider(): array;
}

<?php

namespace tests\utils;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

trait TestsPerformance
{
    #[Test]
    #[DataProvider('performanceProvider')]
    public function shouldPassPerformanceTests($params, $runtimeThresholdSeconds)
    {
        $start = microtime(true);

        $this->fixture->solution(...$params);

        // Calculate the runtime
        $runtimeInSeconds = (microtime(true) - $start);

        // Create a detailed error message in case the test fails
        $errorMessage = sprintf(
            "Performance test failed for params: %s\nExpected runtime threshold: %s seconds\nActual runtime: %s seconds",
            json_encode($params),
            $runtimeThresholdSeconds,
            $runtimeInSeconds
        );

        $this->assertLessThanOrEqual($runtimeThresholdSeconds, $runtimeInSeconds, $errorMessage);
    }

    abstract public static function performanceProvider(): array;
}

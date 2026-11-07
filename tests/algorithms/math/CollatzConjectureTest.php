<?php

namespace tests\algorithms\math;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use algorithms\math\CollatzConjecture;

class CollatzConjectureTest extends TestCase
{
    public static function stepsDataProvider(): array
    {
        return [
            'one' => [1, 0],
            'two' => [2, 1],
            'six' => [6, 8],
            'seven' => [7, 16],
            'twenty seven' => [27, 111],
        ];
    }

    #[DataProvider('stepsDataProvider')]
    public function testStepsReturnsTheNumberOfStepsUntilOne(int $n, int $expectedSteps): void
    {
        $this->assertSame($expectedSteps, CollatzConjecture::steps($n));
    }

    public function testSequenceReturnsTheFullChainFromNumberToOne(): void
    {
        $this->assertSame([6, 3, 10, 5, 16, 8, 4, 2, 1], CollatzConjecture::sequence(6));
    }

    public function testSequenceForOneContainsOnlyOne(): void
    {
        $this->assertSame([1], CollatzConjecture::sequence(1));
    }

    public function testNonPositiveNumberIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        CollatzConjecture::steps(0);
    }
}

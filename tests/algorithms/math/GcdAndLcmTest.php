<?php

namespace tests\algorithms\math;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use algorithms\math\GcdAndLcm;

class GcdAndLcmTest extends TestCase
{
    public static function gcdDataProvider(): array
    {
        return [
            'classic pair' => [12, 18, 6],
            'coprime pair' => [7, 13, 1],
            'one is one' => [1, 29, 1],
            'one argument is zero' => [0, 15, 15],
            'equal numbers' => [8, 8, 8],
        ];
    }

    #[DataProvider('gcdDataProvider')]
    public function testGcdReturnsTheGreatestCommonDivisor(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, GcdAndLcm::gcd($a, $b));
    }

    public static function lcmDataProvider(): array
    {
        return [
            'classic pair' => [4, 6, 12],
            'coprime pair' => [3, 7, 21],
            'one is a multiple of the other' => [3, 12, 12],
            'one argument is zero' => [0, 9, 0],
        ];
    }

    #[DataProvider('lcmDataProvider')]
    public function testLcmReturnsTheLeastCommonMultiple(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, GcdAndLcm::lcm($a, $b));
    }

    public function testNegativeArgumentsAreRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        GcdAndLcm::gcd(-4, 6);
    }
}

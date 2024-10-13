<?php

namespace tests\codility\sieve_of_eratosthenes;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\sieve_of_eratosthenes\CountSemiprimes;

class CountSemiprimesTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CountSemiprimes();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [1, [1], [1]], [0]
            ],
            [
                [26, [1, 4, 16], [26, 10, 20]], [10, 4, 0]
            ]
        ];
    }
}

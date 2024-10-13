<?php

namespace tests\codility\euclidean_algorithm;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\euclidean_algorithm\CommonPrimeDivisors;

class CommonPrimeDivisorsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new CommonPrimeDivisors();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[2, 1, 2], [1, 2, 2]], 1
            ],
            [
                [[15, 10, 3], [75, 30, 5]], 1
            ],
            [
                [[3, 9, 20, 11], [9, 81, 5, 13]], 2
            ]
        ];
    }
}

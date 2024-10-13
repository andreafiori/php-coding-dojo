<?php

namespace tests\codility\prefix_sums;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use tests\utils\TestsPerformance;
use codility\prefix_sums\GenomicRangeQuery;

class GenomicRangeQueryTest extends TestCase
{
    use TestsAcceptance, TestsPerformance;

    protected function setUp(): void
    {
        $this->fixture = new GenomicRangeQuery();
    }

    public static function performanceProvider(): array
    {
        $bigCount = 100000;
        return [
            [
                [implode('', array_fill(0, $bigCount, 'G')), [0], [$bigCount]], 0.5
            ]
        ];
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                ['ACGT', [0], [4]], [1]
            ],
            [
                ['ATGC', [0], [4]], [1]
            ],
            [
                ['ATGC', [1], [4]], [2]
            ],
            [
                ['ATGC', [1], [2]], [3]
            ],
            [
                ['CAGCCTA', [2, 5, 0], [4, 5, 6]], [2, 4, 1]
            ]
        ];
    }

    #[Test]
    #[DataProvider('genomProvider')]
    public function shouldGetCorrectGenomValue($string, $expected)
    {
        $actual = $this->fixture->getValue($string);

        $this->assertEquals($expected, $actual);
    }

    public static function genomProvider()
    {
        return [
            [
                'A', 1
            ],
            [
                'CA', 1
            ],
            [
                'CC', 2
            ],
            [
                'GT', 3
            ],
            [
                'AT', 1
            ],
            [
                'TT', 4
            ],
            [
                'X', null
            ]
        ];
    }
}

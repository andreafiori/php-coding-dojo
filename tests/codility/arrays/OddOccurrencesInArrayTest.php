<?php

namespace tests\codility\arrays;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\arrays\OddOccurrencesInArray;

class OddOccurrencesInArrayTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new OddOccurrencesInArray();
    }

    public function testRSolutionFails()
    {
        $input = array(9, 3, 9, 3, 9, 7, 9);
        $this->assertNotEquals(OddOccurrencesInArray::solution($input), 5);
    }

    public function testReturnRightResult()
    {
        $input = array(9, 3, 9, 3, 9, 7, 9);
        $this->assertEquals(OddOccurrencesInArray::solution($input), 7);
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [[]],
                0
            ],
            [
                [[1, 2, 1]],
                2
            ],
            [
                [[1, 2, 1, 1, 2]],
                1
            ],
            [
                [[1, 2, 3, 3, 2, 1, 2]],
                2
            ]
        ];
    }
}

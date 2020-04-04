<?php

namespace tests\algorithms\search;

use PHPUnit\Framework\TestCase;
use algorithms\search\TernarySearch;

class TernarySearchTest extends TestCase
{
    /**
     * @var TernarySearch
     */
    private $ternarySearch;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ternarySearch = new TernarySearch();
    }

    /**
     * This list must be sorted. If it is not given as sorted, sort it first, then call the binarySearch method
     */
    public function testSimpleTernarySearch()
    {
        $testList = [1, 50, 20, 10, 2, 1];

        $index = $this->ternarySearch->simpleTernarySearch($testList);

        $this->assertEquals($testList[$index], 50);
    }

    /* public function testSearch()
    {
        $result = $this->ternarySearch->search('func', 0, 1, 1e-6);

        $this->assertEquals(self::applyFunction($result), 123);
    } */

    /* public function testTernarySearchRecursive()
    {
        $result = $this->ternarySearch->ternarySearchRecursive('func', 0, 1, 1e-6);

        $this->assertEquals(self::applyFunction($result), 123);
    } */

    /**
     * Apply function
     *
     * @param $x
     * @return float|int
     */
    private function applyFunction($x) {
        // (-a*x*x + b*x + c) is an unimodal function, here a = 1, b = 2, c = 3
        return (-1 * 1 * $x * $x + 2 * $x + 3);
    }
}
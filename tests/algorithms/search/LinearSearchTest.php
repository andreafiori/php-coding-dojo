<?php

namespace tests\algorithms\search;

use PHPUnit\Framework\TestCase;
use algorithms\search\LinearSearch;

class LinearSearchTest extends TestCase
{
    /**
     * @var array
     */
    private $haystack;

    protected function setUp(): void
    {
        parent::setUp();

        $this->haystack = ['book', 'pencil', 'pen', 'note book', 'sharpener', 'rubber'];
    }

    public function testSearchReturnsTrue()
    {
        $this->assertTrue( LinearSearch::search($this->haystack,'note book') );
    }

    public function testSearchReturnsFalse()
    {
        $this->assertFalse( LinearSearch::search($this->haystack,'dog') );
    }
}
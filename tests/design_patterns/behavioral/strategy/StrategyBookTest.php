<?php

namespace tests\design_patterns\behavioral\strategy\book;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\strategy\book\Book;
use design_patterns\behavioral\strategy\book\StrategyContext;

class StrategyBookTest extends TestCase
{
    /**
     * @var Book
     */
    private $book;

    protected function setUp(): void
    {
        parent::setUp();

        $this->book = new Book('PHP for Cats','Larry Truett');

        $strategyContextC = new StrategyContext('C');
    }

    public function testGetBookTitle()
    {
        $strategyContextC = new StrategyContext('C');

        $this->assertEquals($strategyContextC->showBookTitle($this->book), 'PHP FOR CATS');
    }
}
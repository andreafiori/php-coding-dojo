<?php

namespace tests\design_patterns\behavioral\state\book;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\state\book\Book;
use design_patterns\behavioral\state\book\BookContext;

class BookStateTest extends TestCase
{
    /**
     * @var Book
     */
    private $book;

    /**
     * @var BookContext
     */
    private $context;

    protected function setUp(): void
    {
        parent::setUp();

        $this->book = new Book('PHP for Cats', 'Larry Truett');

        $this->context = new BookContext($this->book);
    }

    public function testGetBookTitle()
    {
        $this->assertEquals($this->context->getBookTitle(), 'PHP*for*Cats');
        // $this->assertEquals($this->context->getBookTitle(), 'PHP*for*Cats');
    }
}
<?php

namespace design_patterns\creational\singleton\book;

use PHPUnit\Framework\TestCase;

class BookSingletonTest extends TestCase
{
    /**
     * @var BookBorrower
     */
    private $bookBorrower;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bookBorrower = new BookBorrower();
    }

    public function testBorrowBook()
    {
        $this->bookBorrower = new BookBorrower();
        $this->bookBorrower->borrowBook();

        $this->assertEquals(
            $this->bookBorrower->getAuthorAndTitle(),
            'Design Patterns by Gamma, Helm, Johnson, and Vlissides'
        );
    }

    public function testReturnBook()
    {
        $this->bookBorrower->borrowBook();
        $this->bookBorrower->returnBook();

        $this->assertEquals($this->bookBorrower->getAuthorAndTitle(), 'I don\'t have the book');
    }
}

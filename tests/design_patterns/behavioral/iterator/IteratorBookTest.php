<?php

namespace tests\design_patterns\behavioral\iterator;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\iterator\Book;
use design_patterns\behavioral\iterator\BookList;
use design_patterns\behavioral\iterator\BookListIterator;
use design_patterns\behavioral\iterator\BookListReverseIterator;

class IteratorBookTest extends TestCase
{
    private $bookList;

    protected function setUp(): void
    {
        parent::setUp();

        $firstBook = new Book('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
        $secondBook = new Book('PHP Bible', 'Converse and Park');
        $thirdBook = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

        $this->bookList = new BookList();
        $this->bookList->addBook($firstBook);
        $this->bookList->addBook($secondBook);
        $this->bookList->addBook($thirdBook);
    }

    public function testGettingNextBookWithIterator()
    {
        $booksIterator = new BookListIterator($this->bookList);

        while ($booksIterator->hasNextBook()) {
            $book = $booksIterator->getNextBook();

            $this->assertEquals($book->getAuthorAndTitle(), $book->getTitle().' by '.$book->getAuthor());
        }
    }

    public function testGettingCurrentBookWithIterator()
    {
        $booksIterator = new BookListIterator($this->bookList);
        $booksIterator->getNextBook(); // get first book

        $book = $booksIterator->getCurrentBook();

        $this->assertEquals($book->getAuthorAndTitle(), 'Core PHP Programming, Third Edition by Atkinson and Suraski');
    }

    public function testGettingNextBookWithReverseIterator()
    {
        $booksIterator = new BookListReverseIterator($this->bookList);

        while ($booksIterator->hasNextBook()) {
            $book = $booksIterator->getNextBook();

            $this->assertEquals($book->getAuthorAndTitle(), $book->getTitle().' by '.$book->getAuthor());
        }
    }

    public function testGettingCurrentBookWithReverseIterator()
    {
        $booksReverseIterator = new BookListReverseIterator($this->bookList);
        $booksReverseIterator->getNextBook(); // get last book

        $book = $booksReverseIterator->getCurrentBook();

        $this->assertEquals($book->getAuthorAndTitle(), 'Design Patterns by Gamma, Helm, Johnson, and Vlissides');
    }
}
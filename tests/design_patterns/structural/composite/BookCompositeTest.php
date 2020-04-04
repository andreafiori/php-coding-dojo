<?php

namespace tests\design_patterns\structural\composite;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\composite\book\OneBook;
use design_patterns\structural\composite\book\SeveralBooks;

class BookCompositeTest extends TestCase
{
    /**
     * @var SeveralBooks
     */
    private $severalBooks;

    protected function setUp(): void
    {
        parent::setUp();

        $this->severalBooks = new SeveralBooks();
    }

    public function testGetBookInfoAfterCreatingFirstBook()
    {
        $firstBook = new OneBook('Core PHP Programming, Third Edition', 'Atkinson and Suraski');

        $this->assertEquals($firstBook->getBookInfo(1), 'Core PHP Programming, Third Edition by Atkinson and Suraski');
    }

    public function testSeveralBooksAdd()
    {
        $firstBook = new OneBook('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
        $secondBook = new OneBook('PHP Bible', 'Converse and Park');

        $this->severalBooks->addBook($firstBook);

        $this->assertEquals($this->severalBooks->addBook($secondBook), 2);
    }

    public function testSeveralBooksRemove()
    {
        $firstBook = new OneBook('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
        $secondBook = new OneBook('PHP Bible', 'Converse and Park');

        $this->severalBooks->addBook($firstBook);
        $this->severalBooks->addBook($secondBook);

        $this->assertEquals($this->severalBooks->removeBook($firstBook), 1);
    }
}


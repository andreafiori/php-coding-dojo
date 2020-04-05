<?php

namespace testts\design_patterns\behavioral\memento;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\memento\book\BookMark;
use design_patterns\behavioral\memento\book\BookReader;

class MementoBookTest extends TestCase
{
    /**
     * @var BookReader
     */
    private $bookReader;

    /**
     * @var BookMark
     */
    private $bookMark;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bookReader = new BookReader('Core PHP Programming, Third Edition',103);
        $this->bookMark = new BookMark($this->bookReader);
    }

    public function testBookReaderAfterTypo()
    {
        $this->bookReader->setPage("104");
        $this->bookReader->setPage('2005'); // Oops! a typo

        $this->bookMark->setPage($this->bookReader);

        $this->assertEquals($this->bookReader->getPage(), 2005);
    }

    public function testBookReaderBackToOnePageLater()
    {
        $this->bookReader->setPage("104");
        $this->bookReader->setPage('2005'); // Oops! a typo

        $this->bookMark->getPage($this->bookReader);

        $this->assertEquals($this->bookReader->getPage(), 103);
    }
}

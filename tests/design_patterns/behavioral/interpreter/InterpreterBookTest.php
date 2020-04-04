<?php

namespace tests\design_patterns\behavioral\command;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\interpreter\Book;
use design_patterns\behavioral\interpreter\BookList;
use design_patterns\behavioral\interpreter\Interpreter;

class InterpreterBookTest extends TestCase
{
    /**
     * @var BookList
     */
    private $bookList;

    /**
     * @var Interpreter
     */
    private $interpreter;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bookList = new BookList();
        $this->bookList->addBook( new Book('PHP for Cats','Larry Truett') );
        $this->bookList->addBook( new Book('MySQL for Cats','Larry Truett') );

        $this->interpreter = new Interpreter($this->bookList);
    }

    public function testInvalidRequestMissing()
    {
        $returnString = 'Can not process, can only process book author #, <br> book title #, or book author title #';

        $this->assertEquals($this->interpreter->interpret('author 1'), $returnString);
    }

    public function testValidBookAuthorRequest()
    {
        $returnString = 'Larry Truett';

        $this->assertEquals($this->interpreter->interpret('book author 1'), $returnString);
    }

    public function testValidBookTitleRequest()
    {
        $returnString = 'Larry Truett';

        $this->assertEquals($this->interpreter->interpret('book author 2'), $returnString);
    }

    public function testValidBookAuthorTitleRequest()
    {
        $returnString = 'PHP for Cats by Larry Truett';

        $this->assertEquals($this->interpreter->interpret('book author title 1'), $returnString);
    }

    public function testInvalidRequestWithInvalidBookNumber()
    {
        $returnString = 'Can not process, there is no book # 3';

        $this->assertEquals($this->interpreter->interpret('book title 3'), $returnString);
    }

    public function testInvalidRequestWithNonNumericBookNumber()
    {
        $returnString = 'Can not process, book # must be numeric.';

        $this->assertEquals($this->interpreter->interpret('book title one'), $returnString);
    }
}

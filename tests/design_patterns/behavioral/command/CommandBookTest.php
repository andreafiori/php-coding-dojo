<?php

namespace tests\design_patterns\behavioral\command;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\command\BookCommandee;
use design_patterns\behavioral\command\BookCommand;
use design_patterns\behavioral\command\BookStarsOnCommand;
use design_patterns\behavioral\command\BookStarsOffCommand;

class CommandBookTest extends TestCase
{
    /**
     * @var BookCommandee
     */
    private $book;

    protected function setUp(): void
    {
        parent::setUp();

        $this->book = new BookCommandee('Design Patterns',  'Gamma, Helm, Johnson, and Vlissides');
    }

    public function testBookAfterCreation()
    {
        $this->assertEquals($this->book->getAuthorAndTitle(), 'Design Patterns by Gamma, Helm, Johnson, and Vlissides');
    }

    public function testBookAfterStarsOn()
    {
        $this->callCommand( new BookStarsOnCommand($this->book) );

        $this->assertEquals($this->book->getAuthorAndTitle(), 'Design*Patterns by Gamma,*Helm,*Johnson,*and*Vlissides');
    }

    public function testBookAfterStarsOff()
    {
        // Put the stars on
        $this->callCommand( new BookStarsOnCommand($this->book) );

        // Put the stars off
        $this->callCommand( new BookStarsOffCommand($this->book) );

        $this->assertEquals($this->book->getAuthorAndTitle(), 'Design Patterns by Gamma, Helm, Johnson, and Vlissides');
    }

    /**
     * @param BookCommand $bookCommand
     */
    private function callCommand(BookCommand $bookCommand): void
    {
        $bookCommand->execute();
    }
}

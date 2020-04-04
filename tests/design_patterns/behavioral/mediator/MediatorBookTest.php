<?php

namespace tests\design_patterns\behavioral\mediator;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\mediator\BookAuthorColleague;
use design_patterns\behavioral\mediator\BookMediator;

class MediatorBookTest extends TestCase
{
    /**
     * @var BookMediator
     */
    private $mediator;

    private static $originalBookTitle = 'Design Patterns';
    private static $originalBookAuthor = 'Gamma, Helm, Johnson, and Vlissides';

    protected function setUp(): void
    {
        parent::setUp();

        $this->mediator = new BookMediator(self::$originalBookAuthor, self::$originalBookTitle);
    }

    public function testGetOriginalAuthorAndTitle()
    {
        $this->assertTrue( $this->mediator->getAuthor() instanceof  BookAuthorColleague );
    }

    public function testAfterAuthorSetToLowerCase()
    {
        $author = $this->mediator->getAuthor();

        $author->setAuthorLowerCase();

        $this->assertEquals($author->getAuthor(), strtolower(self::$originalBookAuthor));
    }

    public function testAfterTitleSetToUpperCase()
    {
        $title = $this->mediator->getTitle();

        $title->setTitleUpperCase();

        $this->assertEquals($title->getTitle(), strtoupper(self::$originalBookTitle));
    }
}

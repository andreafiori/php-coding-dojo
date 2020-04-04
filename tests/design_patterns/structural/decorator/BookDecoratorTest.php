<?php

namespace tests\design_patterns\structural\decorator;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\decorator\book\Book;
use design_patterns\structural\decorator\book\BookTitleDecorator;
use design_patterns\structural\decorator\book\BookTitleStarDecorator;
use design_patterns\structural\decorator\book\BookTitleExclaimDecorator;

class BookDecoratorTest extends TestCase
{
    /**
     * @var BookTitleDecorator
     */
    private $decorator;

    /**
     * @var BookTitleStarDecorator
     */
    private $starDecorator;

    /**
     * @var BookTitleExclaimDecorator
     */
    private $exclaimDecorator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->decorator = new BookTitleDecorator(
            new Book('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns')
        );

        $this->starDecorator = new BookTitleStarDecorator($this->decorator);

        $this->exclaimDecorator = new BookTitleExclaimDecorator($this->decorator);
    }

    public function testShowingTitleAfterTwoExclaimsAdded()
    {
        $this->assertEquals($this->decorator->showTitle(), 'Gamma, Helm, Johnson, and Vlissides');

        $this->exclaimDecorator->exclaimTitle();
        $this->exclaimDecorator->exclaimTitle();

        $this->assertEquals($this->decorator->showTitle(), '!!Gamma, Helm, Johnson, and Vlissides!!');
    }

    public function testShowingTitleAfterStarAdded()
    {
        $this->starDecorator->starTitle();

        $this->assertEquals($this->decorator->showTitle(), 'Gamma,*Helm,*Johnson,*and*Vlissides');
    }

    public function testShowingTitleAfterReset()
    {
        $this->starDecorator->starTitle();

        $this->decorator->resetTitle();

        $this->assertEquals($this->decorator->showTitle(), 'Gamma, Helm, Johnson, and Vlissides');
    }
}

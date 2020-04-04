<?php

namespace design_patterns\behavioral\visitor;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\visitor\book\Visitor;
use design_patterns\behavioral\visitor\book\Visitee;
use design_patterns\behavioral\visitor\book\BookVisitee;
use design_patterns\behavioral\visitor\book\SoftwareVisitee;
use design_patterns\behavioral\visitor\book\PlainDescriptionVisitor;

class VisitorBookTest extends TestCase
{
    /**
     * @var BookVisitee
     */
    private $book;
    /**
     * @var SoftwareVisitee
     */
    private $software;
    /**
     * @var PlainDescriptionVisitor
     */
    private $plainVisitor;

    protected function setUp(): void
    {
        parent::setUp();

        $this->book = new BookVisitee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

        $this->software = new SoftwareVisitee(
            'Zend Studio',
            'Zend Technologies',
            'wIn the Visitor pattern, one class calls a function in another class with the current instance of itself. The called class has special functions for each class that can call it. ww.Zend.com'
        );

        $this->plainVisitor = new PlainDescriptionVisitor();

        $this->acceptVisitor($this->book, $this->plainVisitor);
    }

    public function testGetPlainDescriptionOfSoftware()
    {
        $this->acceptVisitor($this->software, $this->plainVisitor);

        $this->assertEquals($this->plainVisitor->getDescription(), 'Zend Studio made by Zend Technologies website at wIn the Visitor pattern, one class calls a function in another class with the current instance of itself. The called class has special functions for each class that can call it. ww.Zend.com');
    }

    /**
     * Accept Visitor
     *
     * @param Visitee $visitee
     * @param Visitor $visitor
     */
    private function acceptVisitor(Visitee $visitee, Visitor $visitor)
    {
        $visitee->accept($visitor);
    }
}
<?php

namespace tests\design_patterns\creational\abstract_factory;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\abstract_factory\book\OReillyBookFactory;
use design_patterns\creational\abstract_factory\book\SamsBookFactory;

class BookAbstractFactoryTest extends TestCase
{
    public function testMakePHPBook()
    {
        $bookFactoryInstance = new OReillyBookFactory();
        $phpBookOne = $bookFactoryInstance->makePHPBook();

        $this->assertEquals($phpBookOne->getAuthor(), 'Rasmus Lerdorf and Kevin Tatroe');
        $this->assertEquals($phpBookOne->getTitle(), 'Programming PHP');
    }

    public function testMakeSQLBook()
    {
        $bookFactoryInstance = new SamsBookFactory();
        $phpBookTwo = $bookFactoryInstance->makeMySQLBook();

        $this->assertEquals($phpBookTwo->getAuthor(), 'Paul Dubois');
        $this->assertEquals($phpBookTwo->getTitle(), 'MySQL, 3rd Edition');
    }
}

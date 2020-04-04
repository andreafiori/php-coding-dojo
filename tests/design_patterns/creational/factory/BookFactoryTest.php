<?php

namespace design_patterns\creational\factory;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\factory\book\AbstractFactoryMethod;
use design_patterns\creational\factory\book\OReillyFactoryMethod;
use design_patterns\creational\factory\book\SamsFactoryMethod;

class BookFactoryTest extends TestCase
{
    /**
     * @var AbstractFactoryMethod
     */
    private $oReillyFactory;

    /**
     * @var AbstractFactoryMethod
     */
    private $samsFactoryMethod;

    protected function setUp(): void
    {
        parent::setUp();

        $this->oReillyFactory = new OReillyFactoryMethod();
        $this->samsFactoryMethod = new SamsFactoryMethod();
    }

    public function testGetOReillyFactoryMethodUsAuthorAndTitle()
    {
        $phpUs = $this->oReillyFactory->makePHPBook('us');

        $this->assertEquals($phpUs->getAuthor(), 'Rasmus Lerdorf and Kevin Tatroe');
        $this->assertEquals($phpUs->getTitle(), 'Programming PHP');
    }

    public function testGetOReillyFactoryMethodOtherAuthorAndTitle()
    {
        $phpUs = $this->oReillyFactory->makePHPBook('other');

        $this->assertEquals($phpUs->getAuthor(), 'George Schlossnagle');
        $this->assertEquals($phpUs->getTitle(), 'Advanced PHP Programming');
    }

    public function testGetOReillyFactoryMethodDefaultAuthorAndTitle()
    {
        $phpUs = $this->oReillyFactory->makePHPBook('theother');

        $this->assertEquals($phpUs->getAuthor(), 'Rasmus Lerdorf and Kevin Tatroe');
        $this->assertEquals($phpUs->getTitle(), 'Programming PHP');
    }

    /**************************** SAMS TESTS *********************************************/
    public function testGetSamsFactoryMethodUsAuthorAndTitle()
    {
        $phpUs = $this->samsFactoryMethod->makePHPBook('us');

        $this->assertEquals($phpUs->getAuthor(), 'George Schlossnagle');
        $this->assertEquals($phpUs->getTitle(), 'Advanced PHP Programming');
    }

    public function testGetSamsFactoryMethodOtherAuthorAndTitle()
    {
        $phpUs = $this->samsFactoryMethod->makePHPBook('other');

        $this->assertEquals($phpUs->getAuthor(), 'Rasmus Lerdorf and Kevin Tatroe');
        $this->assertEquals($phpUs->getTitle(), 'Programming PHP');
    }

    public function testGetSamsFactoryMethodDefaultAuthorAndTitle()
    {
        $phpUs = $this->samsFactoryMethod->makePHPBook('theother');

        $this->assertEquals($phpUs->getAuthor(), 'George Schlossnagle');
        $this->assertEquals($phpUs->getTitle(), 'Advanced PHP Programming');
    }
}
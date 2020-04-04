<?php

namespace tests\design_patterns\behavioral\template_method;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\template_method\book\Book;
use design_patterns\behavioral\template_method\book\TemplateExclaim;
use design_patterns\behavioral\template_method\book\TemplateStars;

class TemplateMethodBookTest extends TestCase
{
    /**
     * @var Book
     */
    private $book;

    protected function setUp(): void
    {
        parent::setUp();

        $this->book = new Book('PHP for Cats','Larry Truett');
    }

    public function testShowExclaimTemplate()
    {
        $exclaimTemplate = new TemplateExclaim();

        $this->assertEquals($exclaimTemplate->showBookTitleInfo($this->book), 'PHP!!!for!!!Cats by Larry!!!Truett');
    }

    public function testShowStarsTemplate()
    {
        $starsTemplate = new TemplateStars();

        $this->assertEquals($starsTemplate->showBookTitleInfo($this->book), 'PHP*for*Cats');
    }
}

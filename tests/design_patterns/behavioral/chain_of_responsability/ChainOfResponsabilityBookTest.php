<?php

namespace tests\design_patterns\behavioral\chain_of_responsability;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\chain_of_responsibility\BookSubSubTopic;
use design_patterns\behavioral\chain_of_responsibility\BookSubTopic;
use design_patterns\behavioral\chain_of_responsibility\BookTopic;

class ChainOfResponsabilityBookTest extends TestCase
{
    /**
     * @var BookTopic
     */
    private $bookTopic;

    /**
     * @var BookSubTopic
     */
    private $bookSubTopic;

    /**
     * @var BookSubSubTopic
     */
    private $bookSubSubTopic;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bookTopic = new BookTopic('PHP 7');
        $this->bookSubTopic = new BookSubTopic('PHP 7 Patterns', $this->bookTopic);
        $this->bookSubSubTopic = new BookSubSubTopic('PHP 7 Patterns for Cats', $this->bookSubTopic);
    }

    public function testBookTopicInitialStateAndDefaultTitle()
    {
        $this->assertEquals('PHP 7', $this->bookTopic->getTopic(), "BookTopic initial topic check.");
        $this->assertEquals('there is no title avaialble', $this->bookTopic->getTitle(), "BookTopic initial default title check.");
    }

    public function testBookTopicCanSetAndGetOwnTitle()
    {
        $this->bookTopic->setTitle('PHP 7 Recipes by Babin, Good, Kroman, and Stephens');

        $this->assertEquals('PHP 7', $this->bookTopic->getTopic(), "BookTopic topic should remain unchanged after setting title.");
        $this->assertEquals(
            'PHP 7 Recipes by Babin, Good, Kroman, and Stephens',
            $this->bookTopic->getTitle(),
            "BookTopic should return the set title."
        );
    }

    public function testGetTopicReturnsSpecificTopicAtEachChainLevel()
    {
        $this->assertEquals('PHP 7', $this->bookTopic->getTopic(), "BookTopic should have its own topic.");
        $this->assertEquals('PHP 7 Patterns', $this->bookSubTopic->getTopic(), "BookSubTopic should have its own topic.");
        $this->assertEquals('PHP 7 Patterns for Cats', $this->bookSubSubTopic->getTopic(), "BookSubSubTopic should have its own topic.");
    }

    public function testGetTitleFromSubSubTopicWhenSet()
    {
        $this->bookSubSubTopic->setTitle('Custom Title for SubSubTopic');
        $this->assertEquals('Custom Title for SubSubTopic', $this->bookSubSubTopic->getTitle(), "Title should come directly from BookSubSubTopic.");
    }

    public function testGetTitleFromSubTopicWhenSubSubTopicHasNone()
    {
        // Assuming BookSubSubTopic is initialized without a title or its title is unset/null
        $this->bookSubTopic->setTitle('Custom Title for SubTopic');

        $this->assertEquals(
            'Custom Title for SubTopic',
            $this->bookSubSubTopic->getTitle(),
            "BookSubSubTopic should delegate to BookSubTopic for title."
        );
        $this->assertEquals('Custom Title for SubTopic', $this->bookSubTopic->getTitle(), "BookSubTopic should return its own title.");
    }

    public function testGetTitleFromBookTopicWhenLowerLevelsHaveNone()
    {
        // Assuming BookSubSubTopic and BookSubTopic are initialized without titles or their titles are unset/null
        $this->bookTopic->setTitle('Custom Title for BookTopic');

        $this->assertEquals(
            'Custom Title for BookTopic',
            $this->bookSubSubTopic->getTitle(),
            "BookSubSubTopic should delegate up to BookTopic for title."
        );
        $this->assertEquals(
            'Custom Title for BookTopic',
            $this->bookSubTopic->getTitle(),
            "BookSubTopic should delegate to BookTopic for title."
        );
        $this->assertEquals('Custom Title for BookTopic', $this->bookTopic->getTitle(), "BookTopic should return its own title.");
    }

    public function testGetTitleFallsBackToDefaultWhenNoTitleInChain()
    {
        // No titles are set on any object in the chain after initial setup.
        $expectedDefaultTitle = 'there is no title avaialble';
        $this->assertEquals($expectedDefaultTitle, $this->bookSubSubTopic->getTitle(), "BookSubSubTopic should fall back to default title.");
        $this->assertEquals($expectedDefaultTitle, $this->bookSubTopic->getTitle(), "BookSubTopic should fall back to default title.");
        $this->assertEquals($expectedDefaultTitle, $this->bookTopic->getTitle(), "BookTopic should provide its default title.");
    }
}
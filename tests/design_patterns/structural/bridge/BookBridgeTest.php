<?php

namespace tests\design_patterns\structural\bridge;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\bridge\book\BridgeBookAuthorTitle;
use design_patterns\structural\bridge\book\BridgeBookTitleAuthor;

class BookBridgeTest extends TestCase
{
    public function testShowTitleUppercase()
    {
        $book = new BridgeBookAuthorTitle('Larry Truett', 'PHP for Cats','CAPS');

        $this->assertEquals($book->showAuthorTitle(), 'LARRY TRUETT\'s PHP FOR CATS');
    }

    public function testShowTitleWithStars()
    {
        $book = new BridgeBookAuthorTitle('Larry Truett', 'PHP for Cats','STARS');

        $this->assertEquals($book->showAuthorTitle(), 'Larry*Truett\'s PHP*for*Cats');
    }

    public function testBridgeBookTitleAuthorWithStars()
    {
        $book = new BridgeBookTitleAuthor('Larry Truett', 'PHP for Cats', 'STARS');

        $this->assertEquals($book->showTitleAuthor(), 'PHP*for*Cats by Larry*Truett');
    }

    public function testBridgeBookTitleAuthorWithCaps()
    {
        $book = new BridgeBookTitleAuthor('Larry Truett', 'PHP for Cats', 'CAPS');

        $this->assertEquals($book->showTitleAuthor(), 'PHP FOR CATS by LARRY TRUETT');
    }
}


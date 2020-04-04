<?php

namespace tests\design_patterns\creational\prototype\book;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\prototype\book\PHPBookPrototype;
use design_patterns\creational\prototype\book\SQLBookPrototype;

class BookPrototypeTest extends TestCase
{
    public function testFirstBook()
    {
        $sqlProto = new SQLBookPrototype();
        $book1 = clone $sqlProto;
        $book1->setTitle('SQL For Cats');

        $this->assertEquals($book1->getTopic(), 'SQL');
        $this->assertEquals($book1->getTitle(), 'SQL For Cats');
    }

    public function testSecondBook()
    {
        $phpProto = new PHPBookPrototype();
        $book2 = clone $phpProto;
        $book2->setTitle('OReilly Learning PHP 5');

        $this->assertEquals($book2->getTopic(), 'PHP');
        $this->assertEquals($book2->getTitle(), 'OReilly Learning PHP 5');
    }
}

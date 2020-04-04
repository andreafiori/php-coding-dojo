<?php

namespace tests\design_patterns\structural\adapter;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\adapter\book\SimpleBook;
use design_patterns\structural\adapter\book\BookAdapter;

class BookAdapterTest extends TestCase
{
    public function testAdapter()
    {
        $book = new SimpleBook('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');

        $bookAdapter = new BookAdapter($book);

        $this->assertEquals($bookAdapter->getAuthorAndTitle(), 'Design Patterns by Gamma, Helm, Johnson, and Vlissides');
    }
}

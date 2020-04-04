<?php

namespace design_patterns\structural\flyweight\book;

class FlyweightBookShelf
{
    /**
     * @var array
     */
    private $books = [];

    /**
     * Add book
     *
     * @param $book
     */
    public function addBook($book) {
        $this->books[] = $book;
    }

    /**
     * Show books
     * TODO: transform $return_string in array
     *
     * @return null|string
     */
    public function showBooks() {
        $return_string = null;
        foreach ($this->books as $book) {
            $return_string .= 'title: '.$book->getAuthor().' author: '.$book->getTitle();
        };

        return $return_string;
    }
}
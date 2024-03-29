<?php

namespace design_patterns\structural\proxy\fluffycat;

class Book {

    private $author;
    private $title;

    /**
     * @param string $title_in
     * @param string $author_in
     */
    public function __construct($title_in, $author_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }

    /**
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle() {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}

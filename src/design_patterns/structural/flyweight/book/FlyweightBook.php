<?php

namespace design_patterns\structural\flyweight\book;

class FlyweightBook
{
    /**
     * @var string
     */
    private $author;
    /**
     * @var string
     */
    private $title;

    /**
     * Set author and title
     *
     * @param string $author
     * @param string $title
     */
    public function __construct($author, $title) {
        $this->author = $author;
        $this->title  = $title;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
}
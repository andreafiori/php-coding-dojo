<?php

namespace design_patterns\structural\proxy\book;

class Book
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
     * Set title and author
     *
     * @param string $title
     * @param string $author
     */
    public function __construct($title, $author) {
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

    /**
     * Get author and title
     *
     * @return string
     */
    public function getAuthorAndTitle() {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}

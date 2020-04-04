<?php

namespace design_patterns\structural\adapter\book;

class SimpleBook
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
     * @param $author
     * @param $title
     */
    public function __construct($author, $title) {
        $this->author = $author;
        $this->title  = $title;
    }

    /**
     * Get author
     *
     * @return mixed
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Get title
     *
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

}

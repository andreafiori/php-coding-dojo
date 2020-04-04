<?php

namespace design_patterns\creational\abstract_factory\book;

class SamsPHPBook extends AbstractPHPBook
{
    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $title;

    public function __construct() {
        $this->author = 'George Schlossnagle';
        $this->title  = 'Advanced PHP Programming';
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
}
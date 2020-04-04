<?php

namespace design_patterns\creational\abstract_factory\book;

class OReillyPHPBook extends AbstractPHPBook
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
        $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
        $this->title  = 'Programming PHP';
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

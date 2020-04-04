<?php

namespace design_patterns\behavioral\visitor\book;

class BookVisitee extends Visitee
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
     * @inheritDoc
     */
    public function accept(Visitor $visitorIn) {
        $visitorIn->visitBook($this);
    }

}
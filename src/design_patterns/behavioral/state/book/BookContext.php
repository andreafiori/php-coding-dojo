<?php

namespace design_patterns\behavioral\state\book;

class BookContext
{
    private $book = null;

    /**
     * @var null|BookTitleStateInterface
     */
    private $bookTitleState = null;

    /**
     * BookList is not instantiated at construct time
     *
     * @param string $book
     */
    public function __construct($book) {

        $this->book = $book;

        $this->setTitleState( new BookTitleStateStars() );
    }

    /**
     * Get book title
     *
     * @return mixed
     */
    public function getBookTitle() {
        return $this->bookTitleState->showTitle($this);
    }

    /**
     * @return null|string
     */
    public function getBook() {
        return $this->book;
    }

    /**
     * @param string $titleState_in
     */
    public function setTitleState($titleState_in) {
        $this->bookTitleState = $titleState_in;
    }

    /**
     * @return null|string
     */
    public function getBookTitleState()
    {
        return $this->bookTitleState;
    }
}
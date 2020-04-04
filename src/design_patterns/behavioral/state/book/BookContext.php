<?php

namespace design_patterns\behavioral\state\book;

class BookContext
{
    /**
     * @var null|Book
     */
    private $book = null;

    /**
     * @var null|BookTitleStateInterface
     */
    private $bookTitleState = null;

    /**
     * BookList is not instantiated at construct time
     *
     * @param Book $book
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
     * Get book
     *
     * @return Book
     */
    public function getBook() {
        return $this->book;
    }

    /**
     * Set title state
     *
     * @param string $titleState
     */
    public function setTitleState($titleState) {
        $this->bookTitleState = $titleState;
    }

    /**
     * Get book title state
     *
     * @return null|string
     */
    public function getBookTitleState()
    {
        return $this->bookTitleState;
    }
}
<?php

namespace design_patterns\creational\singleton\book;

class BookBorrower
{
    /**
     * @var BookSingleton
     */
    private $borrowedBook;

    /**
     * @var bool
     */
    private $haveBook = false;

    /**
     * Get book author and title
     *
     * @return string
     */
    public function getAuthorAndTitle()
    {
        if (true == $this->haveBook) {
            return $this->borrowedBook->getAuthorAndTitle();
        }
        return "I don't have the book";
    }

    /**
     * Borrow book
     */
    public function borrowBook()
    {
        $this->borrowedBook = BookSingleton::borrowBook();

        $this->haveBook = ($this->borrowedBook == null) ? false : true;
    }

    /**
     * Set book as returned
     */
    public function returnBook()
    {
        if ($this->borrowedBook) {
            $this->borrowedBook->returnBook($this->borrowedBook);
        }
    }
}

<?php

namespace design_patterns\behavioral\iterator;

class BookListIterator
{
    /**
     * @var BookList
     */
    protected $bookList;

    /**
     * @var int
     */
    protected $currentBook = 0;

    /**
     * Set BookList
     *
     * @param BookList $bookList_in
     */
    public function __construct(BookList $bookList) {
        $this->bookList = $bookList;
    }

    /**
     * Get current book
     *
     * @return null|Book
     */
    public function getCurrentBook() {
        $condition = $this->currentBook > 0 && ($this->bookList->getBookCount() >= $this->currentBook);

        return ($condition) ? $this->bookList->getBook($this->currentBook) : null;
    }

    /**
     * Get next book
     *
     * @return null|Book
     */
    public function getNextBook() {
        return ($this->hasNextBook()) ? $this->bookList->getBook(++$this->currentBook) : null;
    }

    /**
     * Check if it has the next book
     *
     * @return bool
     */
    public function hasNextBook() {
        return ($this->bookList->getBookCount() > $this->currentBook);
    }

}
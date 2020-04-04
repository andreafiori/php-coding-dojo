<?php

namespace design_patterns\behavioral\iterator;

class BookListReverseIterator extends BookListIterator
{
    /**
     * Set BookList
     *
     * @param BookList $bookList
     */
    public function __construct(BookList $bookList) {
        parent::__construct($bookList);

        $this->bookList = $bookList;

        $this->currentBook = $this->bookList->getBookCount() + 1;
    }

    /**
     * Get next book
     *
     * @return null|Book
     */
    public function getNextBook() {
        return ($this->hasNextBook()) ? $this->bookList->getBook(--$this->currentBook) : null;
    }

    /**
     * Check if has the next book
     *
     * @return bool
     */
    public function hasNextBook() {
        return (1 < $this->currentBook);
    }

}
<?php

namespace design_patterns\behavioral\iterator;

class BookList
{
    /**
     * @var array
     */
    private $books = array();

    /**
     * @var int
     */
    private $bookCount = 0;

    /**
     * Get book\s count
     *
     * @return int
     */
    public function getBookCount() {
        return $this->bookCount;
    }

    /**
     * Set Book count
     *
     * @param int $newCount
     */
    private function setBookCount($newCount) {
        $this->bookCount = $newCount;
    }

    /**
     * @param int $bookNumberToGet
     * @return mixed|null
     */
    public function getBook($bookNumberToGet) {
        $condition = is_numeric($bookNumberToGet) && $bookNumberToGet <= $this->getBookCount();

        return ($condition) ? $this->books[$bookNumberToGet] : null;
    }

    /**
     * Add Book
     *
     * @param Book $book
     * @return int
     */
    public function addBook(Book $book) {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book;
        return $this->getBookCount();
    }

    /**
     * Remove Book
     *
     * @param Book $book_in
     * @return int
     */
    public function removeBook(Book $book_in) {
        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if ($book_in->getAuthorAndTitle() == $this->books[$counter]->getAuthorAndTitle()) {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->books[$x] = $this->books[$x + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }
        return $this->getBookCount();
    }

}

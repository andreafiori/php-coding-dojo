<?php

namespace design_patterns\structural\proxy\book;

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
     * Get book count
     *
     * @return int
     */
    public function getBookCount() {
        return $this->bookCount;
    }

    /**
     * Set book count
     *
     * @param int $newCount
     */
    private function setBookCount($newCount) {
        $this->bookCount = $newCount;
    }

    /**
     * Get book by index
     *
     * @param $bookNumberToGet
     * @return null
     */
    public function getBook($bookNumberToGet) {
        $condition = (is_numeric($bookNumberToGet)) && ($bookNumberToGet <= $this->getBookCount());

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
     * Remove book
     *
     * @param Book $book
     * @return int
     */
    public function removeBook(Book $book) {

        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if ($book->getAuthorAndTitle() == $this->books[$counter]->getAuthorAndTitle())
            {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->books[$x] = $this->books[$x + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }

        return $this->getBookCount();
    }
}
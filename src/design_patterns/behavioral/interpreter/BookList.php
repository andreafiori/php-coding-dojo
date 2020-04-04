<?php

namespace design_patterns\behavioral\interpreter;

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
     * @return int
     */
    public function getBookCount() {
        return $this->bookCount;
    }

    /**
     * @param int $newCount
     */
    private function setBookCount($newCount) {
        $this->bookCount = $newCount;
    }

    /**
     * Get book by number
     *
     * @param $bookNumberToGet
     * @return mixed
     */
    public function getBook($bookNumberToGet) {
        $condition = is_numeric($bookNumberToGet) && $bookNumberToGet <= $this->getBookCount();

        return ($condition) ? $this->books[$bookNumberToGet] : null;
    }

    /**
     * @param Book $book_in
     * @return int
     */
    public function addBook(Book $book_in) {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book_in;
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
            if ($book->getAuthorAndTitle() == $this->books[$counter]->getAuthorAndTitle()) {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->books[$x] = $this->books[$x + 1];
                }

                $this->setBookCount($this->getBookCount() - 1);
            }
        }

        return $this->getBookCount();
    }

}

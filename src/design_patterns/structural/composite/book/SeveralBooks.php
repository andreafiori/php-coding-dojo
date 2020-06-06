<?php

namespace design_patterns\structural\composite\book;

class SeveralBooks extends OnTheBookShelf
{
    /**
     * @var array
     */
    private $oneBooks = [];

    /**
     * @var int
     */
    private $bookCount;

    public function __construct() {
        $this->setBookCount(0);
    }

    /**
     * Get book count
     *
     * @return mixed
     */
    public function getBookCount() {
        return $this->bookCount;
    }

    /**
     * Set book count
     *
     * @param int $newCount
     */
    public function setBookCount($newCount) {
        $this->bookCount = $newCount;
    }

    /**
     * Get book info
     *
     * @param int $bookToGet
     * @return bool
     */
    public function getBookInfo($bookToGet) {
        return ($bookToGet <= $this->bookCount) ? $this->oneBooks[$bookToGet]->getBookInfo(1) : false;
    }

    /**
     * Add book
     *
     * @param mixed $oneBook
     * @return mixed
     */
    public function addBook($oneBook) {
        $this->setBookCount($this->getBookCount() + 1);

        $this->oneBooks[$this->getBookCount()] = $oneBook;

        return $this->getBookCount();
    }

    /**
     * Remove book
     *
     * @param mixed $oneBook
     * @return mixed
     */
    public function removeBook($oneBook) {

        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if ($oneBook->getBookInfo(1) ==
                $this->oneBooks[$counter]->getBookInfo(1)) {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->oneBooks[$x] = $this->oneBooks[$x + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }

        return $this->getBookCount();
    }

}
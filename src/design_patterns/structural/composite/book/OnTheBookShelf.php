<?php

namespace design_patterns\structural\composite\book;

abstract class OnTheBookShelf
{
    /**
     * Get book info
     *
     * @param $previousBook
     * @return mixed
     */
    abstract function getBookInfo($previousBook);

    /**
     * Get book count
     *
     * @return int
     */
    abstract function getBookCount();

    /**
     * Set book count
     *
     * @param $count
     * @return mixed
     */
    abstract function setBookCount($count);

    /**
     * Add book
     *
     * @param $oneBook
     * @return mixed
     */
    abstract function addBook($oneBook);

    /**
     * Remove book
     *
     * @param $oneBook
     * @return mixed
     */
    abstract function removeBook($oneBook);

}
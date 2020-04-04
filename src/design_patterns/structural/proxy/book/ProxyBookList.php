<?php

namespace design_patterns\structural\proxy\book;

class ProxyBookList
{
    /**
     * @var null|BookList
     */
    private $bookList = null;

    /**
     * Get book count
     *
     * @return mixed
     */
    public function getBookCount()
    {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        }
        return $this->bookList->getBookCount();
    }

    /**
     * Add book
     *
     * @param $book
     * @return mixed
     */
    public function addBook($book)
    {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        }

        return $this->bookList->addBook($book);
    }

    /**
     * Get book
     *
     * @param $bookNum
     * @return mixed
     */
    public function getBook($bookNum)
    {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        }

        return $this->bookList->getBook($bookNum);
    }

    /**
     * Remove book
     *
     * @param $book
     * @return mixed
     */
    public function removeBook($book)
    {
        if (NULL == $this->bookList) {
            $this->makeBookList();
        }

        return $this->bookList->removeBook($book);
    }

    /**
     * Make book list
     */
    public function makeBookList(): void
    {
        $this->bookList = new bookList();
    }
}

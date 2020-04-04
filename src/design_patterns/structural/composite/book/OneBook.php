<?php

namespace design_patterns\structural\composite\book;

class OneBook extends OnTheBookShelf
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * OneBook constructor.
     *
     * @param string $title
     * @param string $author
     */
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * @inheritDoc
     */
    public function getBookInfo($bookToGet)
    {
        return (1 == $bookToGet) ? $this->title.' by '.$this->author : false;
    }

    /**
     * @inheritDoc
     */
    public function getBookCount()
    {
        return 1;
    }

    /**
     * @inheritDoc
     */
    public function setBookCount($newCount)
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function addBook($oneBook)
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function removeBook($oneBook)
    {
        return false;
    }

}
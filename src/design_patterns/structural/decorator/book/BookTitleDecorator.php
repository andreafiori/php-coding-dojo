<?php

namespace design_patterns\structural\decorator\book;

class BookTitleDecorator
{
    /**
     * @var Book
     */
    protected $book;

    /**
     * @var string
     */
    protected $title;

    /**
     * @param Book $book
     */
    public function __construct(Book $book)
    {
        $this->book = $book;

        $this->resetTitle();
    }

    /**
     * Doing this so original object is not altered
     */
    public function resetTitle(): void
    {
        $this->title = $this->book->getTitle();
    }

    /**
     * Show title
     *
     * @return mixed
     */
    public function showTitle()
    {
        return $this->title;
    }
}

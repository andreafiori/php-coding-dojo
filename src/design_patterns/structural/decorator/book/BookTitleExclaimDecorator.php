<?php

namespace design_patterns\structural\decorator\book;

class BookTitleExclaimDecorator extends BookTitleDecorator
{
    /**
     * @var BookTitleDecorator
     */
    private $btd;

    /**
     * @param BookTitleDecorator $btd
     */
    public function __construct(BookTitleDecorator $btd) {
        $this->btd = $btd;
    }

    /**
     * Exclaim title
     */
    public function exclaimTitle() {
        $this->btd->title = "!" . $this->btd->title . "!";
    }
}
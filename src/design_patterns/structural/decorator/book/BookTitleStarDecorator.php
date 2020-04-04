<?php

namespace design_patterns\structural\decorator\book;

class BookTitleStarDecorator extends BookTitleDecorator
{
    /**
     * @var BookTitleDecorator
     */
    private $btd;

    /**
     * @param BookTitleDecorator $btd
     */
    public function __construct(BookTitleDecorator $btd)
    {
        $this->btd = $btd;
    }

    /**
     * @return $this
     */
    public function starTitle()
    {
        $this->btd->title = str_replace(" ","*",$this->btd->title);

        return $this;
    }
}

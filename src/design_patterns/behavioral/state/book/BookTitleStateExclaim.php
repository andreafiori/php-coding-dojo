<?php

namespace design_patterns\behavioral\state\book;

class BookTitleStateExclaim implements BookTitleStateInterface
{
    private $titleCount = 0;

    /**
     * Show title
     *
     * @param $context
     * @return mixed|BookTitleStateInterface
     */
    public function showTitle(BookTitleStateInterface $context) {

        $title = $context->getBook()->getTitle();

        $this->titleCount++;

        $context->setTitleState(new BookTitleStateStars());

        return Str_replace(' ','!',$title);
    }
}
<?php

namespace design_patterns\behavioral\state\book;

class BookTitleStateStars implements BookTitleStateInterface {

    private $titleCount = 0;

    /**
     * @param $context
     * @return mixed
     */
    public function showTitle($context) {

        $title = $context->getBook()->getTitle();

        $this->titleCount++;

        if (1 < $this->titleCount) {
            $context->setTitleState(new BookTitleStateExclaim);
        }

        return Str_replace(' ','*',$title);
    }
}
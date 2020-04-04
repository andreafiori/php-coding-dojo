<?php

namespace design_patterns\behavioral\strategy\book;

class StrategyExclaim implements StrategyInterface
{
    /**
     * @var int
     */
    private $titleCount;

    /**
     * @inheritDoc
     */
    public function showTitle(Book $book){

        $title = $book->getTitle();

        $this->titleCount++;

        return Str_replace(' ', '!', $title);
    }
}

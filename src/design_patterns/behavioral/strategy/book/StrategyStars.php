<?php

namespace design_patterns\behavioral\strategy\book;

class StrategyStars implements StrategyInterface
{
    /**
     * @var int
     */
    private $titleCount;

    /**
     * @inheritDoc
     */
    public function showTitle(Book $book) {

        $title = $book->getTitle();

        $this->titleCount++;

        return str_replace(' ', '*', $title);
    }
}
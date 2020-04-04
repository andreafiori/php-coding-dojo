<?php

namespace design_patterns\behavioral\strategy\book;

class StrategyCaps implements StrategyInterface
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

        return strtoupper ($title);
    }
}
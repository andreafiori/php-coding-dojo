<?php

namespace design_patterns\behavioral\strategy\book;

interface StrategyInterface
{
    /**
     * Show book title
     *
     * @param Book $book
     * @return mixed
     */
    public function showTitle(Book $book);
}
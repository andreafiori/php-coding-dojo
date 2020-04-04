<?php

namespace design_patterns\behavioral\strategy\book;

class StrategyContext
{
    /**
     * @var null|StrategyInterface
     */
    private $strategy = null;

    /**
     * BookList is not instantiated at construct time
     *
     * @param $strategyIndId
     */
    public function __construct($strategyIndId) {
        $strategies = [
            'C' => StrategyCaps::class,
            'E' => StrategyExclaim::class,
            'S' => StrategyStars::class
        ];

        if (isset($strategies[$strategyIndId])) {
            $this->strategy = new $strategies[$strategyIndId];
        }
    }

    /**
     * Show Book Title
     *
     * @param Book $book
     * @return mixed
     */
    public function showBookTitle($book) {
        return $this->strategy->showTitle($book);
    }
}


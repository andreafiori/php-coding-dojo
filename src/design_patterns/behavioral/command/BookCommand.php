<?php

namespace design_patterns\behavioral\command;

abstract class BookCommand
{
    /**
     * @var BookCommandee
     */
    protected $bookCommandee;

    /**
     * @param $bookCommandee
     */
    public function __construct(BookCommandee $bookCommandee) {
        $this->bookCommandee = $bookCommandee;
    }

    /**
     * @return mixed
     */
    abstract function execute();

}

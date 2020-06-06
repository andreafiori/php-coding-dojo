<?php

namespace design_patterns\behavioral\command;

abstract class BookCommand
{
    /**
     * @var BookCommandee
     */
    protected $bookCommandee;

    /**
     * BookCommand constructor.
     * @param BookCommandee $bookCommandee
     */
    public function __construct(BookCommandee $bookCommandee)
    {
        $this->bookCommandee = $bookCommandee;
    }

    /**
     * Execute
     *
     * @return mixed
     */
    abstract function execute();

}

<?php

namespace design_patterns\behavioral\command;

class BookStarsOnCommand extends BookCommand
{
    /**
     * @return mixed|void
     */
    public function execute() {
        $this->bookCommandee->setStarsOn();
    }
}

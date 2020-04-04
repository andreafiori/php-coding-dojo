<?php

namespace design_patterns\creational\abstract_factory\car;

class Ferrari extends Car
{
    public function __construct()
    {
        $this->setType('Ferrari');
    }
}

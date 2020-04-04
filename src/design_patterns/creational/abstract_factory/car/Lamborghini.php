<?php

namespace design_patterns\creational\abstract_factory\car;

class Lamborghini extends Car
{
    public function __construct()
    {
        $this->setType('Lamborghini');
    }
}

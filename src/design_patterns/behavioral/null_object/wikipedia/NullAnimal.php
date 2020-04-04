<?php

namespace design_patterns\behavioral\null_object\wikipedia;

class NullAnimal implements Animal
{
    public function makeSound()
    {
        // silence...
        return null;
    }
}
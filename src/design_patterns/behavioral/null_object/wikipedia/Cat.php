<?php

namespace design_patterns\behavioral\null_object\wikipedia;

class Cat implements Animal
{
    public function makeSound()
    {
        return "Meow...";
    }
}
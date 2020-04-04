<?php

namespace design_patterns\behavioral\null_object\wikipedia;

class Dog implements Animal
{
    public function makeSound()
    {
        return "Woof...";
    }
}

<?php

namespace design_patterns\behavioral\null_object;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\null_object\wikipedia\Cat;
use design_patterns\behavioral\null_object\wikipedia\Dog;
use design_patterns\behavioral\null_object\wikipedia\NullAnimal;

class AnimalsWikipediaTest extends TestCase
{
    public function testDogCanWoof()
    {
        $this->assertEquals($this->getAnimalSound('dog'), 'Woof...');
    }

    public function testCatCanMeow()
    {
        $this->assertEquals($this->getAnimalSound('cat'), 'Meow...');
    }

    public function testNullAnimalMakesNoSound()
    {
        $this->assertEquals($this->getAnimalSound('elephant'), null);
    }

    /**
     * Get animal sound by passing animal type
     *
     * @param string $animalType
     * @return string|null
     */
    private function getAnimalSound($animalType)
    {
        $animalTypes =  ['dog' => Dog::class, 'cat' => Cat::class];

        $animal = (isset($animalTypes[$animalType])) ? new $animalTypes[$animalType] : new NullAnimal();

        return $animal->makeSound();
    }
}

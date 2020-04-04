<?php

namespace tests\design_patterns\creational\lazy_initialization;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\lazy_initialization\fruits\Fruit;

class FruitLazyInitializationTest extends TestCase
{
    public function testGetFruitTypes()
    {
        Fruit::getFruit('Apple');
        $this->assertEquals(count(Fruit::getCurrentTypes()), 1);

        Fruit::getFruit('Banana');
        $this->assertEquals(count(Fruit::getCurrentTypes()), 2);
    }
}
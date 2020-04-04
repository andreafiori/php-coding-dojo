<?php

namespace tests\design_patterns\creational\builder;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\builder\pizza\Waiter;
use design_patterns\creational\builder\pizza\HawaiianPizzaBuilder;
use design_patterns\creational\builder\pizza\SpicyPizzaBuilder;

class PizzaBuilderTest extends TestCase
{
    /**
     * @var Waiter
     */
    private $oWaiter;
    /**
     * @var HawaiianPizzaBuilder
     */
    private $oHawaiianPizzaBuilder;
    /**
     * @var SpicyPizzaBuilder
     */
    private $oSpicyPizzaBuilder;

    protected function setUp(): void
    {
        parent::setUp();

        $this->oWaiter               = new Waiter();
        $this->oHawaiianPizzaBuilder = new HawaiianPizzaBuilder();
        $this->oSpicyPizzaBuilder    = new SpicyPizzaBuilder();
    }

    public function testHawaiianPizzaBuilder()
    {
        $this->oWaiter->setPizzaBuilder($this->oHawaiianPizzaBuilder);
        $this->oWaiter->constructPizza();

        $expected = [
            'dough' => 'cross',
            'sauce' => 'mild',
            'topping' => 'ham + pineapple'
        ];

        $this->assertEquals($this->oWaiter->getPizza()->showIngredients(), $expected);
    }

    public function testSpicyPizzaBuilder()
    {
        $this->oWaiter->setPizzaBuilder($this->oSpicyPizzaBuilder);
        $this->oWaiter->constructPizza();

        $expected = [
            'dough' => 'pan baked',
            'sauce' => 'hot',
            'topping' => 'pepperoni + salami'
        ];

        $this->assertEquals($this->oWaiter->getPizza()->showIngredients(), $expected);
    }
}
<?php

namespace design_patterns\creational\builder\pizza;

abstract class PizzaBuilder
{
    /**
     * @var Pizza
     */
    protected $pizza;

    /**
     * Get pizza
     *
     * @return mixed
     */
    public function getPizza() {
        return $this->pizza;
    }

    /**
     * Set a new Pizza object
     */
    public function createNewPizzaProduct(): void {
        $this->pizza = new Pizza();
    }

    /**
     * Build dough
     *
     * @return mixed
     */
    abstract public function buildDough();

    /**
     * Build sauce
     *
     * @return mixed
     */
    abstract public function buildSauce();

    /**
     * Build topping
     *
     * @return mixed
     */
    abstract public function buildTopping();
}
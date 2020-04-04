<?php

namespace design_patterns\creational\builder\pizza;

class SpicyPizzaBuilder extends PizzaBuilder
{
    /**
     * @inheritDoc
     */
    public function buildDough() {
        $this->pizza->setDough('pan baked');
    }

    /**
     * @inheritDoc
     */
    public function buildSauce(): void {
        $this->pizza->setSauce('hot');
    }

    /**
     * @inheritDoc
     */
    public function buildTopping(): void {
        $this->pizza->setTopping('pepperoni + salami');
    }
}
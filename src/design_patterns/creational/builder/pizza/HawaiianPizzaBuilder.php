<?php

namespace design_patterns\creational\builder\pizza;

class HawaiianPizzaBuilder extends PizzaBuilder
{
    /**
     * @inheritDoc
     */
    public function buildDough() {
        $this->pizza->setDough('cross');
    }

    /**
     * @inheritDoc
     */
    public function buildSauce() {
        $this->pizza->setSauce('mild');
    }

    /**
     * @inheritDoc
     */
    public function buildTopping() {
        $this->pizza->setTopping('ham + pineapple');
    }
}

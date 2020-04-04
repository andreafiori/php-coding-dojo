<?php

namespace design_patterns\creational\builder\pizza;

class Waiter
{
    /**
     * @var PizzaBuilder
     */
	protected $pizzaBuilder;

	/**
	 * @param PizzaBuilder $pizzaBuilder
	 */
	public function setPizzaBuilder(PizzaBuilder $pizzaBuilder) {
		$this->pizzaBuilder = $pizzaBuilder;
	}

	/**
     * Get pizza
     *
	 * @return Pizza
	 */
	public function getPizza() {
		return $this->pizzaBuilder->getPizza();
	}

    /**
     * Construct Pizza
     */
	public function constructPizza(): void {
		$this->pizzaBuilder->createNewPizzaProduct();
		$this->pizzaBuilder->buildDough();
		$this->pizzaBuilder->buildSauce();
		$this->pizzaBuilder->buildTopping();
	}
}

<?php

namespace design_patterns\creational\builder\pizza;

class Pizza
{
    /**
     * @var string
     */
    private $dough;

    /**
     * @var string
     */
    private $sauce;

    /**
     * @var string
     */
    private $topping;

    /**
     * Set dough
     *
     * @param $dough
     */
    public function setDough($dough) {
        $this->dough = $dough;
    }

    /**
     * Set sauce
     *
     * @param $sauce
     */
    public function setSauce($sauce) {
        $this->sauce = $sauce;
    }

    /**
     * Set topping
     *
     * @param $topping
     */
    public function setTopping($topping) {
        $this->topping = $topping;
    }

    /**
     * Get ingredients as array
     */
    public function showIngredients() {
        return [
            'dough' => $this->dough,
            'sauce' => $this->sauce,
            'topping' => $this->topping,
        ];
    }
}

<?php

namespace design_patterns\structural\facade\shop;

class Inventory
{
    /**
     * In stock
     *
     * @param $produce
     * @return bool
     */
    public function inStock($produce) {
        return true;
    }
}
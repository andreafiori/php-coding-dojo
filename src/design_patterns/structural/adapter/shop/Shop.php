<?php

namespace design_patterns\structural\adapter\shop;

/**
 * Adapter (wrapper) design pattern
 */
class Shop
{
    /**
     * @var string
     */
    public $shopName = 'My shop';

    /**
     * Get shop name
     *
     * @return string
     */
    public function getShop()
    {
        return $this->shopName;
    }
}

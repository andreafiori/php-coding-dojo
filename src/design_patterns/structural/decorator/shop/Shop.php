<?php

namespace design_patterns\structural\decorator\shop;

/*
 * Decorator design pattern is an alternative to simple inheritance,
 * similar to proxy pattern
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
    public function getShopName() {
        return $this->shopName;
    }
}

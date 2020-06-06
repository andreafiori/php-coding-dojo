<?php

namespace design_patterns\structural\decorator\shop;

class ShopDecorator
{
    /**
     * @var Shop
     */
    protected $shop;

    /**
     * ShopDecorator constructor.
     * @param shop $shop
     */
    public function __construct(Shop $shop) {
        $this->shop = $shop;
    }

    /**
     * Get decorator shop name
     *
     * @return string
     */
    public function getDecoratedShopName() {
        return '=== '.$this->shop->getShopName().' ===';
    }
}

<?php

namespace design_patterns\structural\decorator\shop;

class ShopDecorator {
    protected $shop;

    public function __construct(shop $shop) {
        $this->shop = $shop;
    }

    public function getDecoratedShopName(){
        return '=== '.$this->shop->getShopName().' ===';
    }
}

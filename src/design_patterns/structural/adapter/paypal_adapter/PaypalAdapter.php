<?php

namespace design_patterns\structural\adapter\paypal_adapter;

class PaypalAdapter implements ShopAdapterInterface
{
    /**
     * @var Shop
     */
    private $shop;

    /**
     * @param Shop $shop
     */
    public function __construct(Shop $shop) {
        $this->shop = $shop;
    }

    /**
     * @param $amount
     */
    public function pay($amount) {
        $this->shop->sendPayment($amount);
    }
}
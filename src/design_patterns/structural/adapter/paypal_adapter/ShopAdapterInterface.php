<?php

namespace design_patterns\structural\adapter\paypal_adapter;

interface ShopAdapterInterface {

    /**
     * @param int $amount
     * @return mixed
     */
    public function pay($amount);
}
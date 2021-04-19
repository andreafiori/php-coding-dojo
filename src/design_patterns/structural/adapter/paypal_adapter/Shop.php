<?php

namespace design_patterns\structural\adapter\paypal_adapter;

class Shop {

    /**
     * @param $amount
     */
    public function sendPayment($amount) {
        echo "Sending payment...";
    }
}
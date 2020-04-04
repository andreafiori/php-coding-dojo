<?php

namespace design_patterns\structural\facade\shop;

class Credit
{
    /**
     * Check if there is credit
     *
     * @param float $moneyAmount
     * @return bool
     */
    public function hasCredit($moneyAmount) {
        return true;
    }
}
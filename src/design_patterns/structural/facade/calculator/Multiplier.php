<?php

namespace design_patterns\structural\facade\calculator;

class Multiplier
{
    /**
     * Multiply
     *
     * @param number $a
     * @param number $b
     * @return number
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }
}
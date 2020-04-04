<?php

namespace design_patterns\structural\facade\calculator;

class Subtractor
{
    /**
     * Subtract
     *
     * @param number $a
     * @param number $b
     * @return mixed
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }
}
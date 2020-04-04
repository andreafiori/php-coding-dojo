<?php

namespace design_patterns\structural\facade\calculator;

class Adder
{
    /**
     * Add return string
     *
     * @param int $a
     * @param int $b
     * @return mixed
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
}
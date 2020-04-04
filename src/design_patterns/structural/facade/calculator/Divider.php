<?php

namespace design_patterns\structural\facade\calculator;

class Divider
{
    /**
     * Divide
     *
     * @param $a
     * @param $b
     * @return float
     * @throws \Exception
     */
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new \Exception('Division by zero.');
        }

        return $a / $b;
    }
}
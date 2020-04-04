<?php

namespace design_patterns\structural\facade\calculator;

class CalculatorFactory
{
    /**
     * Get calculator
     *
     * @return CalculatorFacade
     */
    public function getCalculator()
    {
        return new CalculatorFacade(new Adder(), new Subtractor(), new Multiplier(), new Divider());
    }
}
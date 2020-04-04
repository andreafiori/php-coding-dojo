<?php

namespace design_patterns\structural\facade\calculator;

class CalculatorFacade
{
    /**
     * Set operators classes
     *
     * @param Adder $adder
     * @param Subtractor $subtractor
     * @param Multiplier $multiplier
     * @param Divider $divider
     */
    public function __construct(Adder $adder, Subtractor $subtractor, Multiplier $multiplier, Divider $divider)
    {
        $this->_adder = $adder;
        $this->_subtractor = $subtractor;
        $this->_multiplier = $multiplier;
        $this->_divider = $divider;
    }

    /**
     * Calculate
     *
     * @param $expression
     * @return float|mixed|number
     * @throws \Exception
     */
    public function calculate($expression)
    {
        list ($a, $operator, $b) = explode(' ', $expression);

        switch ($operator) {
            case '+':
                return $this->_adder->add($a, $b);
                break;

            case '-':
                return $this->_subtractor->subtract($a, $b);
                break;

            case '*':
                return $this->_multiplier->multiply($a, $b);
                break;

            case '/':
                return $this->_divider->divide($a, $b);
                break;

            default:
                // TODO: Exception: the operator does not exists
                return false;
                break;
        }
    }
}
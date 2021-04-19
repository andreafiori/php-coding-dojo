<?php

namespace algorithms\math;

class Calculator
{
    /**
     * @var int|float
     */
	public $op1;

    /**
     * @var int|float
     */
	public $op2;

    /**
     * Addition
     *
     * @return float|int
     */
	public function add()
	{
		return $this->op1 + $this->op2;
	}

    /**
     * Subtraction
     *
     * @return float|int
     */
	public function subtract()
	{
		return $this->op1 - $this->op2;
	}

    /**
     * Check if number is divisible
     *
     * @return bool
     */
	public function isDivisible()
	{
		return $this->op1 % $this->op2 == 0;
	}
}
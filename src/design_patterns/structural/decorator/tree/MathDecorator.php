<?php

namespace design_patterns\structural\decorator\tree;

/**
 * Decorator
 */
abstract class MathDecorator extends Math
{
    /**
     * @var Math
     */
    protected $_math;

    /**
     * @param Math $math
     */
    public function __construct(Math $math)
    {
        $this->_math = $math;
    }

    /**
     * Get Math
     *
     * @return Math
     */
    public function getMath()
    {
        return $this->_math;
    }
}
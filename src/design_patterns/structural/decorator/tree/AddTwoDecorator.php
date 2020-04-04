<?php

namespace design_patterns\structural\decorator\tree;

/**
 * ConcreteDecoratorA
 */
class AddTwoDecorator extends MathDecorator
{
    /**
     * Execute
     *
     * @return int
     */
    public function execute()
    {
        return $this->_math->execute() + 2;
    }
}

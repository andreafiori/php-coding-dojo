<?php

namespace design_patterns\structural\decorator\tree;

/**
 * ConcreteComponent
 */
class StandardMath extends Math
{
    /**
     * @return int
     */
    public function execute()
    {
        return 0;
    }
}
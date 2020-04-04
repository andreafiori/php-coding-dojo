<?php

namespace design_patterns\creational\factory\automobile;

class AutomobileFactory
{
    /**
     * @param string $make
     * @param string $model
     *
     * @return Automobile
     */
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}
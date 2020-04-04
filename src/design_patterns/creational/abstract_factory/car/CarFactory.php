<?php

namespace design_patterns\creational\abstract_factory\car;

class CarFactory
{
    /**
     * Create car
     *
     * @param $carType
     * @return mixed
     * @throws \Exception
     */
    public static function createCar($carType)
    {
        if (class_exists($carType)) {
            return new $carType;
        }

        throw new \Exception("Unkonwn car type");
    }
}
<?php

namespace design_patterns\creational\factory\automobile;

class Automobile
{
    /**
     * @var string
     */
    private $vehicleMake;
    /**
     * @var string
     */
    private $vehicleModel;

    /**
     * @param string $make
     * @param string $model
     */
    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    /**
     * Get make and model
     *
     * @return string
     */
    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}
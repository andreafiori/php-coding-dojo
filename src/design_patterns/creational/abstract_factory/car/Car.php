<?php

namespace design_patterns\creational\abstract_factory\car;

abstract class Car
{
    /**
     * @var string
     */
    private $type;

    /**
     * Get type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }
}
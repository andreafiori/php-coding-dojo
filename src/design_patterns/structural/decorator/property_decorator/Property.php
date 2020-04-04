<?php

namespace design_patterns\structural\decorator\property_decorator;

class Property implements PropertyInterface
{
    private $_value;

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->_value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }
}
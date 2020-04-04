<?php

namespace design_patterns\structural\decorator\property_decorator;

class UppercasePropertyDecorator extends PropertyDecoratorAbstract
{
    /**
     * Get value uppercase
     *
     * @return string
     */
    public function getValue()
    {
        return strtoupper($this->_property->getValue());
    }
}
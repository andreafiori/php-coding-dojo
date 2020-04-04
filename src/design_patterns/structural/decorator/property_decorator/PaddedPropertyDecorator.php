<?php

namespace design_patterns\structural\decorator\property_decorator;

class PaddedPropertyDecorator extends PropertyDecoratorAbstract
{
    /**
     * @var int|string
     */
    private $_length = 0;

    /**
     * @var string
     */
    private $_string = ' ';

    /**
     * @param PropertyInterface $product
     * @param $length
     * @param bool|false $string
     */
    public function __construct(PropertyInterface $product, $length, $string = false)
    {
        if (is_numeric($length)) {
            $this->_length = $length;
        }

        if (is_string($string)) {
            $this->_string = $string;
        }

        return parent::__construct($product);
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return str_pad($this->_property->getValue(), $this->_length, $this->_string);
    }
}

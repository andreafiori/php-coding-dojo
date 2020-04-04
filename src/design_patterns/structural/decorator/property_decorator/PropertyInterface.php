<?php

namespace design_patterns\structural\decorator\property_decorator;

interface PropertyInterface
{
    public function setValue($value);
    public function getValue();
}

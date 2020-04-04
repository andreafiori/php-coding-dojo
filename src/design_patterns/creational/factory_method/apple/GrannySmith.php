<?php

namespace design_patterns\creational\factory_method\apple;

class GrannySmith extends Apple
{
    public function __construct() {
        $this->color    = 'Green';
        $this->size     = 'medium';
        $this->origin   = 'Australia';
        $this->season   = 'October - Desember';
    }
}
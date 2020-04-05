<?php

namespace design_patterns\behavioral\servant\wikipedia;

class Position
{
    public $xPosition;
    public $yPosition;

    public function __construct($dx, $dy) {
        $this->xPosition = $dx;
        $this->yPosition = $dy;
    }
}
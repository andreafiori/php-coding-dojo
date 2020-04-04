<?php

namespace design_patterns\behavioral\servant\wikipedia;

class Position
{
    /**
     * @var int
     */
    public $xPosition;

    /**
     * @var int
     */
    public $yPosition;

    /**
     * Position constructor.
     * @param int $dx
     * @param int $dy
     */
    public function __construct($dx, $dy) {
        $this->xPosition = $dx;
        $this->yPosition = $dy;
    }
}
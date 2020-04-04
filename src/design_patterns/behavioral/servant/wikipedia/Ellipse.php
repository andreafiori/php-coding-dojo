<?php

namespace design_patterns\behavioral\servant\wikipedia;

class Ellipse implements Movable
{
    /**
     * Position of the geometric object on some canvas
     *
     * @var Position
     */
    private $p;

    /**
     * @inheritDoc
     */
    public function setPosition(Position $p) {
        $this->p = $p;
    }

    /**
     * @inheritDoc
     */
    public function getPosition() {
        return $this->p;
    }
}
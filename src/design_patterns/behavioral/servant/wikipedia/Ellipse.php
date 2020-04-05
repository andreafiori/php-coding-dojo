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
     * Method, which sets position of geometric object
     *
     * @param Position $p
     */
    public function setPosition(Position $p) {
        $this->p = $p;
    }

    /**
     * Method, which returns position of geometric object
     *
     * @return Position
     */
    public function getPosition() {
        return $this->p;
    }
}
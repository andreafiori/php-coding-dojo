<?php

namespace design_patterns\behavioral\servant\wikipedia;

interface Movable
{
    /**
     * Sets position of geometric object
     *
     * @param Position $p
     */
    public function setPosition(Position $p);

    /**
     * Returns position of geometric object
     *
     * @return Position
     */
    public function getPosition();
}
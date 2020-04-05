<?php

namespace design_patterns\behavioral\servant\wikipedia;

interface Movable {
    /**
     * @param Position $p
     */
    public function setPosition(Position $p);

    public function getPosition();
}
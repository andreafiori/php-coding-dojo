<?php

namespace design_patterns\behavioral\servant\wikipedia;

class Rectangle implements Movable {

    /**
     * Position of the geometric object on some canvas
     *
     * @var Position
     */
    private $p;

    /**
     * Method, which sets position of geometric object
     */
    public function setPosition($p) {
        $this->p = $p;
    }

    // Method, which returns position of geometric object
    public function getPosition() {
		return $this->p;
	}
}

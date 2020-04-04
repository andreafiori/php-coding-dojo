<?php

namespace design_patterns\behavioral\servant\wikipedia;

/**
 * Servant class, offering its functionality to classes implementing
 * Movable Interface
 */
class MoveServant
{
    /**
     * Move Movable implementing class to position where
     *
     * @param Movable $serviced
     * @param Position $where
     */
    public function moveTo(Movable $serviced, Position $where) {
        // Do some other stuff to ensure it moves smoothly and nicely, this is
        // the place to offer the functionality
        $serviced->setPosition($where);
    }

    /**
     * Move Movable implementing class by dx and dy
     *
     * @param Movable $serviced
     * @param $dx
     * @param $dy
     */
    public function moveBy(Movable $serviced, $dx, $dy) {
        // this is the place to offer the functionality
        $dx .= $serviced->getPosition()->xPosition;
        $dy .= $serviced->getPosition()->yPosition;
        $serviced->setPosition( new Position($dx, $dy) );
    }
}
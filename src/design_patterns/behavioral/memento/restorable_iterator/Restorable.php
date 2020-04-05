<?php

namespace design_patterns\behavioral\memento\restorable_iterator;

/**
 * Originator
 */
interface Restorable
{
    /**
     * Get state
     *
     * @return mixed
     */
    public function getState();

    /**
     * Set state
     *
     * @param $state
     * @return mixed
     */
    public function setState($state);
}
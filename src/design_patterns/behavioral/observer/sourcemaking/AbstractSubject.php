<?php

namespace design_patterns\behavioral\observer\sourcemaking;

abstract class AbstractSubject
{
    /**
     * @var string
     */
    protected $favorites;

    /**
     * @param AbstractObserver $observer
     * @return mixed
     */
    abstract function attach(AbstractObserver $observer);

    /**
     * @param AbstractObserver $observer
     * @return mixed
     */
    abstract function detach(AbstractObserver $observer);

    abstract function notify();

    /**
     * Get favorites
     *
     * @return string
     */
    public function getFavorites() {
        return $this->favorites;
    }
}
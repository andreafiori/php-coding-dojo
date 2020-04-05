<?php

namespace design_patterns\behavioral\observer\sourcemaking;

class PatternSubject extends AbstractSubject
{
    /**
     * @var array of $this
     */
    private $observers = [];
    /**
     * @var array
     */
    private $notifications = [];

    /**
     * Add an observer
     *
     * @param AbstractObserver $observer
     */
    public function attach(AbstractObserver $observer) {
        $this->observers[] = $observer;
    }

    /**
     * Eliminate an observer
     *
     * @param AbstractObserver $observer
     */
    public function detach(AbstractObserver $observer): void {
        foreach($this->observers as $okey => $oval) {
            if ($oval == $observer) {
                unset($this->observers[$okey]);
            }
        }
    }

    /**
     * Notify when a favorite is updated
     */
    public function notify(): void {
        foreach($this->observers as $obs) {
            $obs->update($this);

            $this->notifications[] = $this->getFavorites();
        }
    }

    /**
     * Update favorites
     *
     * @param $newFavorites
     */
    public function updateFavorites($newFavorites) {
        $this->favorites = $newFavorites;
        $this->notify();
    }

    /**
     * Get notifications list
     *
     * @return array
     */
    public function getNotifications(): array
    {
        return $this->notifications;
    }
}

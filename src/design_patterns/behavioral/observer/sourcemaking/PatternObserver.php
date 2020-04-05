<?php

namespace design_patterns\behavioral\observer\sourcemaking;

class PatternObserver extends AbstractObserver
{
    /**
     * @param AbstractSubject $subject
     * @return string
     */
    public function update(AbstractSubject $subject) {
        $favorites = $subject->getFavorites();
        return $favorites;
    }
}

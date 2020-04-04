<?php

namespace design_patterns\structural\bridge\book;

class BridgeBookAuthorTitle extends BridgeBook
{
    /**
     * Show author and title
     *
     * @return string
     */
    public function showAuthorTitle() {
        return $this->showAuthor() . "'s " . $this->showTitle();
    }
}
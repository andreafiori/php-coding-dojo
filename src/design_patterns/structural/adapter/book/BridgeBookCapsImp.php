<?php

namespace design_patterns\structural\adapter\book;

class BridgeBookCapsImp
{
    /**
     * Show author
     *
     * @param string $author
     * @return string
     */
    public function showAuthor($author) {
        return strtoupper($author);
    }

    /**
     * Show title
     *
     * @param string $title
     * @return string
     */
    public function showTitle($title) {
        return strtoupper($title);
    }
}

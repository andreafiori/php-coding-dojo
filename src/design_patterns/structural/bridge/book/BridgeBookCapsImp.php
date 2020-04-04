<?php

namespace design_patterns\structural\bridge\book;

class BridgeBookCapsImp extends BridgeBookImp
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

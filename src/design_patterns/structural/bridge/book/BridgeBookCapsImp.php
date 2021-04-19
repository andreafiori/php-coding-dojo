<?php

namespace design_patterns\structural\bridge\book;

class BridgeBookCapsImp extends BridgeBookImp {

    /**
     * @param string $author_in
     * @return string
     */
    public function showAuthor($author_in) {
        return strtoupper($author_in);
    }

    /**
     * @param string $title_in
     * @return string
     */
    public function showTitle($title_in) {
        return strtoupper($title_in);
    }
}

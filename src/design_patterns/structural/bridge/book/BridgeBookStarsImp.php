<?php

namespace design_patterns\structural\bridge\book;

class BridgeBookStarsImp extends BridgeBookImp
{
    /**
     * Show author
     *
     * @param string $author
     * @return mixed
     */
    public function showAuthor($author) {
       return str_replace(" ","*", $author);
    }

    /**
     * Show title
     *
     * @param string $title
     * @return mixed
     */
    public function showTitle($title) {
        return str_replace(' ',"*", $title);
    }
}

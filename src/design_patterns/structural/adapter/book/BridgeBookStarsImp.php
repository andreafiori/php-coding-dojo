<?php

namespace design_patterns\structural\adapter\book;

class BridgeBookStarsImp extends BridgeBookImp
{
    /**
     * @inheritDoc
     */
    public function showAuthor($author) {
        return Str_replace(" ","*",$author);
    }

    /**
     * @inheritDoc
     */
    public function showTitle($title) {
        return Str_replace(" ","*",$title);
    }
}

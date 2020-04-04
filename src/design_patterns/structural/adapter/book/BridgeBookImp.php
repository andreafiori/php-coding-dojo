<?php

namespace design_patterns\structural\adapter\book;

abstract class BridgeBookImp
{
    /**
     * Show author
     *
     * @param string $author
     * @return mixed
     */
    abstract function showAuthor($author);

    /**
     * Show title
     *
     * @param string $title
     * @return mixed
     */
    abstract function showTitle($title);
}

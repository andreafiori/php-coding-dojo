<?php

namespace design_patterns\structural\bridge\book;

abstract class BridgeBookImp
{
    /**
     * Show author
     *
     * @param $author
     * @return mixed
     */
    abstract function showAuthor($author);

    /**
     * Show title
     *
     * @param $title
     * @return mixed
     */
    abstract function showTitle($title);
}

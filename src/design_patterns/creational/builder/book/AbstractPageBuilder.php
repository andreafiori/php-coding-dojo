<?php

namespace design_patterns\creational\builder\book;

abstract class AbstractPageBuilder
{
    /**
     * Set title
     *
     * @param $title
     * @return mixed
     */
    abstract function setTitle($title);

    /**
     * @param $heading
     * @return mixed
     */
    abstract function setHeading($heading);

    /**
     * Set text
     *
     * @param $text
     * @return mixed
     */
    abstract function setText($text);

    /**
     * @return mixed
     */
    abstract function formatPage();

    /**
     * Get page
     *
     * @return mixed
     */
    abstract function getPage();
}

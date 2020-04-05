<?php

namespace design_patterns\behavioral\state\book;

interface BookTitleStateInterface
{
    /**
     * Show title
     *
     * @param string $context
     * @return mixed
     */
    public function showTitle($context);
}
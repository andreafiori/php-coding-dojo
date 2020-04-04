<?php

namespace design_patterns\behavioral\visitor\book;

abstract class Visitee
{
    /**
     * Accept
     *
     * @param Visitor $visitorIn
     * @return mixed
     */
    abstract function accept(Visitor $visitorIn);
}
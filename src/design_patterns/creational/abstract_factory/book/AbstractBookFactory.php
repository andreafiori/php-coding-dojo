<?php

namespace design_patterns\creational\abstract_factory\book;

abstract class AbstractBookFactory
{
    /**
     * @return mixed
     */
	abstract function makePHPBook();

    /**
     * @return mixed
     */
	abstract function makeMySQLBook();

}

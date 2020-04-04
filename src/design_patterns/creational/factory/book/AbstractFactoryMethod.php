<?php

namespace design_patterns\creational\factory\book;

abstract class AbstractFactoryMethod
{
	/**
	 * @param mixed $param
	 * @return mixed
	 */
	abstract function makePHPBook($param);
}
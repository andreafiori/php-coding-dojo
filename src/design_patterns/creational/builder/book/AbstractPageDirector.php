<?php

namespace design_patterns\creational\builder\book;

abstract class AbstractPageDirector
{
	/**
	 * @param AbstractPageBuilder $builder
	 */
	abstract function __construct(AbstractPageBuilder $builder);

	abstract function buildPage();

	abstract function getPage();

}

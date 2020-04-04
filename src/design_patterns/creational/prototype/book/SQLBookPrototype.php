<?php

namespace design_patterns\creational\prototype\book;

class SQLBookPrototype extends BookPrototype
{
	public function __construct() {
		$this->setTopic('SQL');
	}

	public function __clone() {

	}
}

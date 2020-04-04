<?php

namespace design_patterns\creational\prototype\book;

class PHPBookPrototype extends BookPrototype
{
	public function __construct() {
		$this->setTopic('PHP');
	}

	public function __clone() {
	    // Magic method clone
	}
}
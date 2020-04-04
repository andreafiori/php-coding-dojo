<?php

namespace design_patterns\creational\abstract_factory\book;
  
abstract class AbstractBook
{
	abstract function getAuthor();

	abstract function getTitle();
}
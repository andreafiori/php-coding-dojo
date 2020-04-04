<?php

namespace design_patterns\creational\factory\book;

abstract class AbstractBook
{
	abstract function getAuthor();

	abstract function getTitle();
}
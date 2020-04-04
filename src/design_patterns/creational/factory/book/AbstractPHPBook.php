<?php

namespace design_patterns\creational\factory\book;

abstract class AbstractPHPBook
{
	protected $subject = 'PHP';

	abstract public function getAuthor();

	abstract public function getTitle();
}
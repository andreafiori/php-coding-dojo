<?php

namespace design_patterns\creational\factory\book;

class OReillyFactoryMethod extends AbstractFactoryMethod
{
	/**
	 * @inheritDoc
	 */
	public function makePHPBook($param) {
		$book = null;

		switch ($param) {

			case 'us':
				$book = new OReillyPHPBook;
			break;

			case 'other':
				$book = new SamsPHPBook;
			break;

			default:
				$book = new OReillyPHPBook;
			break;
		}

		return $book;
	}
}
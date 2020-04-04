<?php

namespace design_patterns\creational\factory\book;

class VisualQuickstartPHPBook extends AbstractPHPBook
{
    /**
     * @var string
     */
	private $author;

    /**
     * @var string
     */
	private $title;

	public function __construct() {
		$this->author = 'Larry Ullman';
		$this->title  = 'PHP for the World Wide Web';
	}

	/**
     * Get author
     *
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
     * Get title
     *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
}
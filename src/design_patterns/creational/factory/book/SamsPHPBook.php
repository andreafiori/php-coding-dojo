<?php

namespace design_patterns\creational\factory\book;

class SamsPHPBook extends AbstractPHPBook
{
    /**
     * @var string
     */
	private $author;

    /**
     * @var string
     */
	private $title;

    /**
     * Set author and title
     */
	public function __construct() {
        $this->author = 'George Schlossnagle';
        $this->title  = 'Advanced PHP Programming';
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

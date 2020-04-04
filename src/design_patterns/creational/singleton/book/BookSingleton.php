<?php

namespace design_patterns\creational\singleton\book;

class BookSingleton
{
    /**
     * @var string
     */
	private $author = 'Gamma, Helm, Johnson, and Vlissides';

    /**
     * @var string
     */
	private $title  = 'Design Patterns';

    /**
     * @var string
     */
	private static $book = null;

    /**
     * @var string
     */
	private static $isLoanedOut = false;

    /**
     * Borrow book
     *
     * @return BookSingleton|null
     */
	public static function borrowBook()
    {
		if (false == self::$isLoanedOut) {
			if (null == self::$book) {
				self::$book = new BookSingleton();
			}
			self::$isLoanedOut = true;
			return self::$book;
		}
		return null;
	}

	/**
     * Set book as returned
     *
	 * @param BookSingleton $bookReturned
	 */
	public function returnBook(BookSingleton $bookReturned) {
		self::$isLoanedOut = false;
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

	/**
     * Get author and title
     *
	 * @return string
	 */
    public function getAuthorAndTitle() {
		return $this->getTitle() . ' by ' . $this->getAuthor();
	}
}

<?php

class BookSingleton
{
	private $author = 'Gamma, Helm, Johnson, and Vlissides';
	private $title  = 'Design Patterns';
	private static $book = null;
	private static $isLoanedOut = false;

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
	 * @param BookSingleton $bookReturned
	 */
	public function returnBook(BookSingleton $bookReturned) {
		self::$isLoanedOut = false;
	}

    /**
     * @return string
     */
    public function getAuthor() {
	    return $this->author;
	}

    /**
     * @return string
     */
    public function getTitle() {
	    return $this->title;
	}

	/**
	 * @return string
	 */
    public function getAuthorAndTitle() {
		return $this->getTitle() . ' by ' . $this->getAuthor();
	}

}

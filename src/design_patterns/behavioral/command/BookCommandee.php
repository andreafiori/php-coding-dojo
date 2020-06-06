<?php

namespace design_patterns\behavioral\command;

class BookCommandee
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
     *
     * @param string $title
     * @param string $author
     */
    public function __construct($title, $author) {
        $this->setAuthor($author);
        $this->setTitle($title);
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
     * Set author
     *
     * @param $author
     */
    public function setAuthor($author): void {
        $this->author = $author;
    }

    /**
     * Get title
     *
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param $title
     */
    public function setTitle($title): void {
        $this->title = $title;
    }

    /**
     * Set author and title replacing space with stars
     */
    public function setStarsOn(): void {
        $this->setAuthor(str_replace(' ','*',$this->getAuthor()));
        $this->setTitle(str_replace(' ','*',$this->getTitle()));
    }

    /**
     * Set author and title
     */
    public function setStarsOff(): void {
        $this->setAuthor(Str_replace('*', ' ', $this->getAuthor()));
        $this->setTitle(Str_replace('*', ' ', $this->getTitle()));
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

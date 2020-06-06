<?php

namespace design_patterns\behavioral\mediator;

class BookAuthorColleague extends BookColleague
{
    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $state;

    /**
     * Set author and mediator
     *
     * @param string $author
     * @param string $mediator
     */
    public function __construct($author, $mediator) {
        $this->author = $author;

        parent::__construct($mediator);
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
    public function setAuthor($author) {
        $this->author = $author;
    }

    /**
     * Get state
     *
     * @return mixed
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Set state
     *
     * @param $state
     */
    public function setState($state) {
        $this->state = $state;
    }

    /**
     * Set author Upper case
     */
    public function setAuthorUpperCase(): void {
        $this->setAuthor(strtoupper($this->getAuthor()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    /**
     * Set author Lower case
     */
    public function setAuthorLowerCase(): void {
        $this->setAuthor(strtolower($this->getAuthor()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }

}

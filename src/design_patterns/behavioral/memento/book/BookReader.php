<?php

namespace design_patterns\behavioral\memento\book;
  
class BookReader
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $page;
    
    /**
     * Set page and title
     *
     * @param string $title
     * @param int $page
     */
    public function __construct($title, $page) {
        $this->setPage($page);
        $this->setTitle($title);
    }
    
    /**
     * @param int $page
     */
    public function setPage($page) {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPage() {
        return $this->page;
    }
    
    /**
     * @param string $title_in
     */
    public function setTitle($title_in) {
        $this->title = $title_in;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }
}

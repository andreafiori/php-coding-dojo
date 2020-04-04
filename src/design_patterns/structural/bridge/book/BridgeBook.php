<?php

namespace design_patterns\structural\bridge\book;

abstract class BridgeBook
{
    /**
     * @var string
     */
    private $bbAuthor;
    /**
     * @var string
     */
    private $bbTitle;
    /**
     * @var string
     */
    private $bbImp;

    /**
     * @param string $author
     * @param string $title
     * @param $choice
     */
    public function __construct($author, $title, $choice) {
        $this->bbAuthor = $author;
        $this->bbTitle  = $title;

        if ('STARS' == $choice) {
            $this->bbImp = new BridgeBookStarsImp();
        } else {
            $this->bbImp = new BridgeBookCapsImp();
        }
    }

    /**
     * Show author
     *
     * @return mixed|string
     */
    public function showAuthor() {
        return $this->bbImp->showAuthor($this->bbAuthor);
    }

    /**
     * @return mixed|string
     */
    public function showTitle() {
        return $this->bbImp->showTitle($this->bbTitle);
    }

}
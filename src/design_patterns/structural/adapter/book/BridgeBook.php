<?php

namespace design_patterns\structural\adapter\book;

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
     * @var BridgeBookCapsImp
     */
    private $bbImp;

    /**
     * @param string $author
     * @param string $title
     * @param string $choice
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
     * @return string
     */
    public function showAuthor() {
        return $this->bbImp->showAuthor($this->bbAuthor);
    }

    /**
     * Show title
     *
     * @return string
     */
    public function showTitle() {
        return $this->bbImp->showTitle($this->bbTitle);
    }
}

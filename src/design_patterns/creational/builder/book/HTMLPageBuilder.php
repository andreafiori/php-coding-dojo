<?php

namespace design_patterns\creational\builder\book;

class HTMLPageBuilder extends AbstractPageBuilder
{
    private $page = NULL;

    public function __construct() {
      $this->page = new HTMLPage();
    }

    /**
     * @inheritdoc
     */
    public function setTitle($title) {
      $this->page->setTitle($title);
    }

    /**
     * @inheritdoc
     */
    public function setHeading($heading) {
      $this->page->setHeading($heading);
    }

    /**
     * @inheritdoc
     */
    public function setText($text) {
      $this->page->setText($text);
    }

    /**
     * @inheritdoc
     */
    public function formatPage() {
        $this->page->formatPage();
    }

    /**
     * @inheritdoc
     */
    public function getPage() {
        return $this->page;
    }
}
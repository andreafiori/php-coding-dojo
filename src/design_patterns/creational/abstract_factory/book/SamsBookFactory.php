<?php

namespace design_patterns\creational\abstract_factory\book;

class SamsBookFactory extends AbstractBookFactory
{
    /**
     * @var string
     */
    private $context = 'Sams';

    /**
     * @return SamsPHPBook
     */
    public function makePHPBook() {
        return new SamsPHPBook();
    }

    /**
     * @return SamsMySQLBook
     */
    public function makeMySQLBook() {
        return new SamsMySQLBook();
    }

}
<?php

namespace design_patterns\creational\abstract_factory\book;

class OReillyBookFactory extends AbstractBookFactory
{
    /**
     * @var string
     */
    private $context = 'OReilly';

    /**
     * @return OReillyPHPBook
     */
    public function makePHPBook() {
        return new OReillyPHPBook();
    }

    /**
     * @return OReillyMySQLBook
     */
    public function makeMySQLBook() {
        return new OReillyMySQLBook();
    }

}

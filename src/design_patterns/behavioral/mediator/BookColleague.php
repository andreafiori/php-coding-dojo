<?php

namespace design_patterns\behavioral\mediator;

abstract class BookColleague
{
    /**
     * @var
     */
    private $mediator;

    /**
     * @param $mediator
     */
    public function __construct($mediator) {
        $this->mediator = $mediator;
    }

    /**
     * Get mediator
     *
     * @return mixed
     */
    public function getMediator() {return $this->mediator;}

    /**
     * Changed
     *
     * @param string $changingClassIn
     */
    public function changed($changingClassIn) {
        $this->getMediator()->titleChanged($changingClassIn);
    }

}
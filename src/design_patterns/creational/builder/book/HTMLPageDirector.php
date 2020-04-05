<?php

namespace design_patterns\creational\builder\book;

class HTMLPageDirector extends AbstractPageDirector
{
    /**
     * @var HTMLPageBuilder
     */
    private $builder = NULL;

    /**
     * @param AbstractPageBuilder $builder
     */
    public function __construct(AbstractPageBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildPage(): void {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing, testing, testing!');
        $this->builder->setText('Testing, testing, testing, or!');
        $this->builder->setText('Testing, testing, testing, more!');
        $this->builder->formatPage();
    }

    /**
     * Get page
     *
     * @return mixed
     */
    public function getPage() {
        return $this->builder->getPage();
    }
}

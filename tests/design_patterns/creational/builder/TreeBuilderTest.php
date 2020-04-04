<?php

namespace tests\design_patterns\creational\builder;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\builder\tree\DumbUnbalancedTreeBuilder;

class TreeBuilderTest extends TestCase
{
    public function testDumbUnbalancedTreeBuilder()
    {
        $builder = new DumbUnbalancedTreeBuilder();
        $builder->addNumber(7);
        $builder->addNumber(1);
        $builder->addNumber(3);
        $builder->addNumber(5);
        $builder->addNumber(8);
        $builder->addNumber(6);
        $builder->addNumber(9);
        $builder->addNumber(5);
        $builder->addNumber(4);
        $builder->addNumber(2);

        $this->assertEquals($builder->getTree()->dump(), ' 1  2  3  4  5  5  6  7  8  9 ');
    }
}
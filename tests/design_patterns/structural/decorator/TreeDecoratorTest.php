<?php

namespace tests\design_patterns\structural\decorator;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\decorator\tree\StandardMath;
use design_patterns\structural\decorator\tree\AddTwoDecorator;
use design_patterns\structural\decorator\tree\MultiplyTreeDecorator;

class TreeDecoratorTest extends TestCase
{
    public function testGetShopName()
    {
        $m = new AddTwoDecorator( new MultiplyTreeDecorator( new AddTwoDecorator( new StandardMath() ) ) );

        $this->assertEquals($m->execute(), 8);
    }
}



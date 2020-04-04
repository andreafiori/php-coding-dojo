<?php

namespace tests\design_patterns\structural\decorator;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\decorator\shop\Shop;
use design_patterns\structural\decorator\shop\ShopDecorator;

class ShopDecoratorTest extends TestCase
{
    public function testGetShopName()
    {
        $shopDecorator = new ShopDecorator(new Shop());

        $this->assertEquals($shopDecorator->getDecoratedShopName(), '=== My shop ===');
    }
}
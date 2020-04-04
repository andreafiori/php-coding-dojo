<?php

namespace tests\design_patterns\structural\adapter;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\adapter\shop\Shop;
use design_patterns\structural\adapter\shop\ShopAdapter;

class ShopAdapterTest extends TestCase
{
    public function testGetShopName()
    {
        $shopAdapter = new ShopAdapter(new Shop());

        $this->assertEquals($shopAdapter->getShopName(), 'My shop');
    }
}

<?php

namespace tests\design_patterns\structural\facade\shop;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\facade\shop\Credit;
use design_patterns\structural\facade\shop\Inventory;
use design_patterns\structural\facade\shop\PurchaseFacade;

class ShopFacadeTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testBuyArticle()
    {
        $purchase = new PurchaseFacade(new Inventory(), new Credit());

        $purchase->buy('apple', '10');
    }
}
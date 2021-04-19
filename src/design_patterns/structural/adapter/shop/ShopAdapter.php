<?php

namespace design_patterns\structural\adapter\shop;

class ShopAdapter
{
    /**
     * @var Shop
     */
	protected $shop;

    /**
     * ShopAdapter constructor.
     *
     * @param Shop $shop
     */
	public function __construct(Shop $shop)
	{
		$this->shop = $shop;
	}

    /**
     * Get shop name
     *
     * @return string
     */
	public function getShopName()
	{
		return $this->shop->getShop();
	}
}

// $shopAdapter = new ShopAdapter(new Shop());
// echo $shopAdapter->getShopName();

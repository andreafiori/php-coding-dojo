<?php

namespace design_patterns\creational\factory;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\factory\automobile\AutomobileFactory;

class AutomobileFactoryTest extends TestCase
{
    public function testFactory()
    {
        $veyron = AutomobileFactory::create('Bugatti', 'Veyron');

        $this->assertEquals($veyron->getMakeAndModel(), 'Bugatti Veyron');
    }
}
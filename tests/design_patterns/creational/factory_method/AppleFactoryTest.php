<?php

namespace design_patterns\creational\factory_method;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\factory_method\apple\AppleFactory;
use design_patterns\creational\factory_method\apple\GrannySmith;

class AppleFactoryTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testGetApple()
    {
        $a = AppleFactory::getApple(GrannySmith::class);

        $this->assertTrue($a instanceof GrannySmith);
    }
}
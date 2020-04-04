<?php

namespace tests\design_patterns\structural\decorator;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\decorator\property_decorator\Property;
use design_patterns\structural\decorator\property_decorator\PaddedPropertyDecorator;
use design_patterns\structural\decorator\property_decorator\UppercasePropertyDecorator;

/**
 * Because the decorators and the concrete Property objects all implement
 * the same PropertyInterface and the decorators will accept any objects which also implement this interface,
 * the decorators can be combined to make more complex decorations.
 */
class PropertyDecoratorTest extends TestCase
{
    public function test()
    {
        $property = new Property();
        $property->setValue('property value');

        $this->assertEquals($property->getValue(), 'property value');
    }

    public function testGetPropertyUppercase()
    {
        $property = new Property();
        $property->setValue('property value');

        $decoratedProperty = new UppercasePropertyDecorator($property);

        $this->assertEquals($decoratedProperty->getValue(), 'PROPERTY VALUE');
    }

    public function testPaddedPropertyDecorator()
    {
        $property = new Property();
        $property->setValue('property value');
        $decoratedProperty = new UppercasePropertyDecorator($property);
        $paddedUpperProperty = new PaddedPropertyDecorator($decoratedProperty, 20, '*');

        $this->assertEquals($paddedUpperProperty->getValue(), 'PROPERTY VALUE******');
    }
}

<?php

namespace tests\design_patterns\creational\abstract_factory;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\abstract_factory\car\Lamborghini;
use design_patterns\creational\abstract_factory\car\CarFactory;
use design_patterns\creational\abstract_factory\car\Ferrari;

class CarFactoryTest extends TestCase
{
    private $carFactory;

    protected function setUp(): void
    {
        parent::setUp();

        $this->carFactory = new CarFactory();
    }

    /**
     * @throws \Exception
     */
    public function testFactoryCanCreateCar()
    {
        $this->assertTrue(CarFactory::createCar(Ferrari::class) instanceof Ferrari);
    }

    /**
     * @throws \Exception
     */
    public function testFactoryCannotCreateCar()
    {
        $this->expectException(\Exception::class);

        CarFactory::createCar(\ArrayAccess::class);
    }

    public function testFerrariType()
    {
        $car = new Ferrari();

        $this->assertEquals($car->getType(), 'Ferrari');
    }

    public function testLamborghiniType()
    {
        $car = new Lamborghini();

        $this->assertEquals($car->getType(), 'Lamborghini');
    }
}
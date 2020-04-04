<?php

namespace tests\design_patterns\structural\decorator;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\decorator\window\LockedWindow;
use design_patterns\structural\decorator\window\StandardWindow;

class WindowDecoratorInterfaceTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testLockedWindowThrowsException()
    {
        $this->expectException( \Exception::class );

        $w = new LockedWindow( new StandardWindow() );

        $w->open();
    }
}

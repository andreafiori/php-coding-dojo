<?php

namespace tests\design_patterns\creational\prototype;

use PHPUnit\Framework\TestCase;
use design_patterns\creational\prototype\widget\LoginPage;
use design_patterns\creational\prototype\widget\FlashWidget;
use design_patterns\creational\prototype\widget\JavascriptWidget;
use design_patterns\creational\prototype\widget\ObjectTag;

class WidgetPrototypeTest extends TestCase
{
    public function testLoginPageObjectTag()
    {
        $pageLogin = new LoginPage(new FlashWidget(new ObjectTag));

        $this->assertStringContainsString('Welcome User', $pageLogin->render() );
    }

    public function testLoginPageJavascriptWidget()
    {
        $pageLogin = new LoginPage(new JavascriptWidget);

        $this->assertStringContainsString('Welcome User', $pageLogin->render() );
    }
}


<?php

namespace design_patterns\creational\prototype\widget;

/**
 * Implementation that generates html tied to a javascript library.
 * This is one ConcretePrototype.
 */
class JavascriptWidget implements BlinkingWidget
{
    /**
     * @param $text
     */
    public function initialize($text)
    {
        $this->_text = $text;
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return '<div dojoType="...">' . $this->_text . '</div>';
    }
}
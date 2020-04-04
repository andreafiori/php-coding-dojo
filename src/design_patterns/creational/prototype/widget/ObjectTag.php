<?php

namespace design_patterns\creational\prototype\widget;

/**
 * A collaborator for the next ConcretePrototype.
 */
class ObjectTag implements BlinkingWidget
{
    private $_html;

    /**
     * @param string $html
     */
    public function setContent($html)
    {
        $this->_html = $html;
    }

    public function initialize($text)
    {
        return;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "<object>{$this->_html}</object>\n";
    }
}

<?php

namespace design_patterns\creational\prototype\widget;

/**
 * SECTION 2: a Client class which clones instances of BlinkingWidget.
 *
 * We cannot instantiate all the BlinkingWidgets in advance, so we need a base
 * one which will be cloned every time a new one is needed.
 */
class LoginPage
{
    /**
     * @var BlinkingWidget
     */
    private $_widget;

    /**
     * LoginPage constructor.
     * @param BlinkingWidget $toClone
     */
    public function __construct(BlinkingWidget $toClone)
    {
        $this->_widget = $toClone;
    }

    /**
     * Render
     *
     * @return string
     */
    public function render()
    {
        $userId = uniqid('User ');
        // insert all the logic needed here. Es:
        $complexBusinessLogicRules = true;
        if ($complexBusinessLogicRules) {
            $widget = clone $this->_widget;
            $widget->initialize('Welcome '.$userId);
            return (string) $widget;
        }
    }
}

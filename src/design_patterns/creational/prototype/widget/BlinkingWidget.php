<?php

namespace design_patterns\creational\prototype\widget;

/**
 * SECTION 1: a Widget interface and two different implementations.
 * Unlike in previous examples, where the Product was an Helper which generated
 * widgets, the actual instance created here is the Widget itself.
 * The problem solved, though, is the same: managing creation of widgets in the
 * middle of business logic.
 *
 * This class purpose is to generate blinking text in spite of all
 * usability recommendations. This is the Prototype.
 * As always, interfaces in php may be omitted. This is primary here for type
 * hinting.
 */
interface BlinkingWidget
{
    public function initialize($text);

    /**
     * Get string as object
     *
     * @return string
     */
    public function __toString();
}
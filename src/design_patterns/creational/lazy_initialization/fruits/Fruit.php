<?php

namespace design_patterns\creational\lazy_initialization\fruits;

class Fruit
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    private static $types = [];

    /**
     * Fruit constructor.
     * @param $type
     */
    private function __construct($type) {
        $this->type = $type;
    }

    /**
     * Get fruit
     *
     * @param string $type
     * @return mixed
     */
    public static function getFruit($type) {
        // Lazy initialization takes place here
        if (!isset(self::$types[$type])) {
            self::$types[$type] = new Fruit($type);
        }

        return self::$types[$type];
    }

    /**
     * Get current types
     *
     * @return array
     */
    public static function getCurrentTypes() {
        return self::$types;
    }
}
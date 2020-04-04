<?php

namespace design_patterns\creational\factory_method\apple;

class AppleFactory
{
    public static $id = 0;

    /**
     * Get Apple object if exists
     *
     * @param string $className
     * @return null|Apple
     * @throws \Exception
     */
     public static function getApple($className) {
        if (!class_exists($className)) {
            throw new \Exception('The Apple class does not exist');
        }
        $apple = new $className();
        $apple->id = self::$id++;
        return $apple;
    }

}

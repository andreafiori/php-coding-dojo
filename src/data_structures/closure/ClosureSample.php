<?php

namespace data_structures\closure;

/**
 * Resources:
 *  http://php.net/manual/en/functions.anonymous.php
 *  http://php.net/manual/en/closure.bindto.php
 */
class ClosureSample
{
    /**
     * @var int
     */
    private static $sfoo = 1;

    /**
     * @var int
     */
    private static $ifoo = 2;

    static function getsFoo() {
        return self::$sfoo;
    }

    /**
     * @return int
     */
    static function getiFoo() {
        return self::$ifoo;
    }
}
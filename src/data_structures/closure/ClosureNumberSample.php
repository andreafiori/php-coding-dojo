<?php

namespace data_structures\closure;

/**
 * Resources:
 *  http://php.net/manual/en/functions.anonymous.php
 *  http://php.net/manual/en/closure.bindto.php
 */
class ClosureNumberSample
{
    /**
     * @var int
     */
    private $v;

    private static $sv = 10;

    /**
     * ClosureNumberSample constructor.
     * @param $v
     */
    public function __construct($v) {
        $this->v = $v;
    }

    /**
     * @return \Closure
     */
    public function mul() {
        return static function ($x) {
            return isset($this) ? $this->v * $x : self::$sv * $x;
        };
    }
}
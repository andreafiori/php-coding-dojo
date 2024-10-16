<?php

namespace algorithms\math;

/**
 * Armstrong Number implementation
 *
 * @see https://en.wikipedia.org/wiki/Narcissistic_number
 */
class ArmstrongNumber
{
    /**
     * Check if a number is an Armstrong Number
     *
     * @param float $n
     * @return bool
     */
    public static function isArmstrongNumber(float $n)
    {
        if ($n < 100) {
            return false;
        }

        $c = $a = $temp = 0;
        $temp = $n;
        while ($n > 0) {
            $a = $n % 10;
            $n = $n / 10;
            $c = $c + ($a * $a * $a);
        }

        return ($temp == $c);
    }
}
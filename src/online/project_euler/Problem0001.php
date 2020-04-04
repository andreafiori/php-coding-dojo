<?php

namespace online\project_euler;

/**
 * Multiples of 3 and 5
 *
 * URL: https://projecteuler.net/problem=1
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 *
 */
class Problem0001
{
    /**
     * @return float|int
     */
    public static function solution()
    {
        $numbers = array_filter(range(0, 1000), function($n) {
            return ($n % 3 == 0) || ($n % 5	 == 0);
        });

        return array_sum($numbers);
    }
}
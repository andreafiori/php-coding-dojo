<?php

namespace online\project_euler;

use online\codility\CodilityInterface;

/**
 * Largest prime factor
 *
 * URL: https://projecteuler.net/problem=3
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 *
 */
class Problem0003 implements CodilityInterface
{
    /**
     * @return float|int
     */
    public static function solution($number)
    {
        for ($x = 3; $x <= ceil($number/2); $x = $x+2) {

            // is factor?
            if ($number % $x == 0) {
                $y = $number / $x;

                // is prime?
                if (self::isPrime($y)) {
                    return $y;
                    break;
                }
            }
        }

        return isset($y) ? $y : 0;
    }

    /**
     * Check if a number is prime
     *
     * @param int $n
     * @return bool
     */
    public static function isPrime($n) {
        for ($x = 2; $x <= floor($n/2); $x++) {
            if ($n % $x == 0) {
                return false;
            }
        }
        return true;
    }
}

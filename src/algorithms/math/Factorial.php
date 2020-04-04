<?php

namespace algorithms\math;

/**
 * Formula: n! = n*(n-1)*(n-2)*(n-3)...3.2.1 and zero factorial is defined as one i.e. 0! = 1.
 * Wikipedia: https://en.wikipedia.org/wiki/Factorial
 */
class Factorial
{
    /**
     * Get recursive solution
     *
     * @param int $n
     * @return float|int
     */
    public static function getRecursive(int $n)
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Number cannot be less than zero');
        }
        return ($n == 0) ? 1 : ($n * self::getRecursive($n - 1));
    }

    /**
     * Get non recursive solution
     *
     * @param int $number
     * @return int|float
     */
    public static function getNonRecursive(int $number)
    {
        if ($number < 0) {
            throw new \InvalidArgumentException('Number cannot be less than zero');
        }

        $factorial = 1;
        while ($number > 0) {
            $factorial *= $number;
            $number --;
        }

        return $factorial;
    }
}

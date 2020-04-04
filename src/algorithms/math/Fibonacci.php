<?php

namespace algorithms\math;

class Fibonacci
{
    /**
     * Calculate Fibonacci number
     *
     * @param int $n
     * @return int
     * @throws \InvalidArgumentException
     */
    public static function calculate($n)
    {
        if ($n <= 0) {
            throw new \InvalidArgumentException('Fibonacci can be calculated only with positive integers greater than 0');
        }

        return ($n == 1 || $n == 2) ? 1 : self::calculate($n - 1) + self::calculate($n - 2);
    }

    /**
     * Get sequence of Fibonacci numbers in an array
     *
     * @param int $number
     * @throws \InvalidArgumentException
     */
    public static function getSequence($number)
    {
        if ($number == round($number) and $number >= 1 and $number < $number+1) {
            $sequence = [];
            for($i=1; $i<=$number; $i++) {
                $sequence[] = self::calculate($i);
            }
            return $sequence;
        }
        return 0;
    }
}

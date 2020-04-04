<?php

namespace algorithms\math;

/**
 * Detect a leap year
 *
 * Write a function that returns true or false depending on whether its input integer is a leap year or not.
 *   A leap year is divisible by 4, but is not otherwise divisible by 100, unless it is also divisible by 400
 *
 *  Examples:
 *
 *  - 1996 -> true
 *  - 2001 -> false
 *  - 2000 -> true
 *  - 1900 -> false
 *
 *
 * @author Andrea Fiori
 * @since  29 January 2015
 */
class LeapYears
{
    /**
     * Detect if it's leap year
     *
     * @param int $year
     * @return bool
     */
    public static function isLeap($year)
    {
        if (!is_int($year)) {
            throw new \InvalidArgumentException($year.' is not an integer number');
        }

        return self::isAtypicalLeapYear($year) and !self::isAtypicalCommonYear($year);
    }

    /**
     * Detect if it's atypical common year
     *
     * @param int $year
     *
     * @return bool
     */
    private static function isAtypicalCommonYear($year)
    {
        return $year % 100 == 0 and !($year % 400 == 0);
    }

    /**
     * Detect if it's an atypical leap year
     *
     * @param $year
     *
     * @return bool
     */
    private static function isAtypicalLeapYear($year)
    {
        return $year % 4 == 0;
    }
}
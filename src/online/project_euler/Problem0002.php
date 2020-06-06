<?php

namespace online\project_euler;

/**
 * Even Fibonacci numbers
 *
 * URL: https://projecteuler.net/problem=2
 *
 * Each new term in the Fibonacci sequence is generated by adding the previous two terms.
 * By starting with 1 and 2, the first 10 terms will be:
 *
 *      1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 *
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million,
 * find the sum of the even-valued terms.
 */
class Problem0002
{
    /**
     * @return float|int
     */
    public static function solution()
    {
        $max = 4000000;
        $fibonacci = array(1, 1, 2);

        // Generate Fibonacci sequence
        while(true) {

            $new_number = array_sum(array_slice($fibonacci, -2, 2, true));

            if($new_number < $max) {
                $fibonacci[] = $new_number;
            } else {
                break;
            }
        }

        // Filter even numbers
        $even = array_filter($fibonacci, function($n) {
            return ($n % 2 != 0);
        });

        return array_sum($even);
    }
}
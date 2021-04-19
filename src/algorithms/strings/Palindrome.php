<?php

namespace algorithms\strings;

/**
 * Palindrome Numbers and Strings utility
 */
class Palindrome {

    /**
     * Check if a number is palindrome
     *
     * @param Float $number
     * @return bool
     */
    public static function isPalindromeNumber($number)
    {
        $temp = $number;
        $new = 0;
        while (floor($temp)) {
            $d = $temp % 10;
            $new = $new * 10 + $d;
            $temp = $temp/10;
        }
        return ($new == $number);
    }

    /**
     * Check if a string is palindrome using the strrev function
     *
     * @param String $string
     * @return bool
     */
    public static function isPalindrome($string)
    {
        $string = preg_replace("/[^A-Za-z0-9 ]/", '', $string);

        $string = strtolower( str_replace(' ', '', $string) );

        return ($string == strrev($string));
    }

    /**
     * Check if a string is palindrome using a recursive algorithm
     *
     * @param String $string
     * @return bool
     */
    public function isPalindromeRecursive($string)
    {
        // Base codition to end the recursive process
        if ((strlen($string) == 1) || (strlen($string) == 0)) {
            return true;
        }

        // First character is compared with the last one
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)) {
            // Checked letters are discarded and passed for next call
            return $this->isPalindromeRecursive(substr($string,1,strlen($string) -2));
        }
        return false;
    }
}
<?php

namespace algorithms\strings;

/**
 * Wikipedia: https://en.wikipedia.org/wiki/Palindrome
 */
class Palindrome
{
    /**
     * Check if a string is palindrome
     *
     * @param string $string
     * @return bool
     */
    public function isPalindrome($string)
    {
        return ($string == strrev($string));
    }

    /**
     * Check if a string is palindrome without using the strrev function
     *
     * @param string $str
     * @return bool
     */
    public static function isPalindromeWithotStrRev($str)
    {
        $str = preg_replace("/[^A-Za-z0-9 ]/", '', $str);

        $str = strtolower( str_replace(' ', '', $str) );

        return ($str == strrev($str));
    }

    /**
     * Check if a string is palindrome reversing a string
     *
     * @param string $mystring
     * @return bool
     */
    public static function isPalindromeReverseString($mystring)
    {
        $myArray = str_split($mystring);
        $len = sizeof($myArray);
        $newString = "";

        for ($i = $len-1; $i >= 0; $i--) {
            $newString .= $myArray[$i];
        }

        return ($mystring == $newString);
    }
}
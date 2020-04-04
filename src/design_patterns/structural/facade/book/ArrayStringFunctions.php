<?php

namespace design_patterns\structural\facade\book;

class ArrayStringFunctions
{
    /**
     * Array to string
     *
     * @param array $arrayIn
     * @return null|string
     */
    public static function arrayToString($arrayIn) {
        $string_out = NULL;
        foreach ($arrayIn as $oneChar) {
            $string_out .= $oneChar;
        }

        return $string_out;
    }

    /**
     * String to array
     *
     * @param $stringIn
     * @return array
     */
    public static function stringToArray($stringIn) {
        return str_split($stringIn);
    }
}
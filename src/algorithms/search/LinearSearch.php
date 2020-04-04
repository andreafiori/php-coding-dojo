<?php

namespace algorithms\search;

class LinearSearch
{
    /**
     * Linear search implementation
     *
     * @param array $arr
     * @param $item
     * @return bool
     */
    public static function search(array $arr, $item) {
        // Traversing through the whole array to search for the 'item'
        foreach ($arr as $val) {
            if($val === $item) {
                // If the item found return true. You can also return the 'index' of the array here instead
                return true;
            }
        }
        return false;
    }
}

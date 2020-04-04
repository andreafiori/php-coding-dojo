<?php

namespace data_structures\arrays;

class ArrayTreeBuilder
{
    /**
     * Builder recursive array tree
     *
     * @param array $arrayInput
     * @return array
     */
    public static function buildRecursiveArrayTree(array $arrayInput)
    {
        if ( !isset($toReturn) ) {
            $toReturn = [];
        }

        foreach($arrayInput as $key => $value) {
            if (isset($value['parent'])) {
                if ($value['parent'] != 0) {
                    $arrayInput[$key]['childs'][] = $arrayInput[$value['parent']];

                    self::buildRecursiveArrayTree($value);
                } else {
                    $toReturn[] = $value;
                }
            }
        }

        return $arrayInput;
    }

    /**
     * Create a new array by sorting the input array by ID
     *
     * @param array $arrayInput
     * @return array
     */
    public static function sortArrayByIds(array $arrayInput)
    {
        $arraySorted = array();
        foreach($arrayInput as $arr) {
            if (isset($arr['id'])) {
                $arraySorted[$arr['id']] = $arr;
            }
        }
        return $arraySorted;
    }
}
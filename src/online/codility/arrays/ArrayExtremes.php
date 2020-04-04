<?php

namespace online\codility\arrays;

/*
Array Extremes

A zero-indexed array A consisting of N integers is given. The average value of array A is defined as:

(A[0] + A[1] + ... + A[N-1]) / N

The deviation of element A[P] (where 0 = P < N) is defined as |A[P] - M|, where M is the average value of array A.

Element A[P] is called extreme if its deviation is maximal among all the elements of A.

For example, consider the following array A consisting of four elements:

  A[0] =  9
  A[1] =  4
  A[2] = -3
  A[3] = -10
The average value of this array is (9 + 4 + (-3) + (-10)) / 4 = 0. The deviation of element A[2] is ((-3) - 0) = (0 - (-3)) = 3. The deviation of element A[3] is 10. It is an extreme element of array A, since no other element has a deviation greater than 10. There are no other extreme elements in this array.

Write a function:

function solution($A);

that, given a zero-indexed array A consisting of N integers, returns the index of an extreme element. If more than one extreme element exists, the function may return the index of any of them. If the array is empty (and hence no extreme element exists), the function should return -1.

For example, given array A shown above, the function should return 3, since A[3] is the only extreme element.

Assume that:

- N is an integer within the range [0..1,000,000];
- each element of array A is an integer within the range [-2,147,483,648..2,147,483,647].
Complexity:

- expected worst-case time complexity is O(N);
- expected worst-case space complexity is O(1), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.
*/
class  ArrayExtremes
{
    /**
     * @param array $A
     * @return int|string
     */
    public static function solution($A)
    {
        $extremes = array();
        $extremesMax = 0;
        $extremeMaxKey = '';

        if ( !is_array($A) ) {
            return -1;
        }

        foreach($A as $key => $value)
        {
            if ($value < 0)
            {
                $extremes[$key] = (int) abs($value);
                if ($extremes[$key] > $extremesMax)
                {
                    $extremesMax = $extremes[$key];
                    $extremeMaxKey = $key;
                }
            }
        }

        return (!$extremeMaxKey) ? -1 : $extremeMaxKey;
    }
}

<?php

namespace codility\prime_and_composite_numbers;

/*
A positive integer D is a factor of a positive integer N
if there exists an integer M such that N = D * M.

For example, 6 is a factor of 24, because M = 4 satisfies the above condition (24 = 6 * 4).

Write a function:

    function solution($N);

that, given a positive integer N, returns the number of its factors.

For example, given N = 24, the function should return 8, because 24 has 8 factors,
namely 1, 2, 3, 4, 6, 8, 12, 24. There are no other factors of 24.

Assume that:
        N is an integer within the range [1..2,147,483,647].

Complexity:
        expected worst-case time complexity is O(sqrt(N));
        expected worst-case space complexity is O(1).
*/
class CountFactors
{
    /**
     * CODILITY ANALYSIS: https://codility.com/demo/results/trainingAP5XM2-R7G/
     * LEVEL: EASY
     * Correctness: 100%
     * Performance: 100%
     * Task score:  100%
     *
     * @param int $N positive integer N
     *
     * @return int The number of positive integer N factors
     */
    public function solution($N)
    {
        // Number of factors/divisors
        $factorsCount = 0;

        // For example, if N = 36, factors are [1, 2, 3, 4, 6, 9, 12, 18]
        // we use i * i < n formula to count divisors
        $i = 1;
        while ($i * $i <= $N) {
            if ($N % $i == 0) {
                if ($i * $i < $N) {
                    // Factors are mirrored, so we add +2
                    // i = 1, 36 / 1 = 36 exist,
                    // i = 2, 36 / 2 = 18 exist,
                    // i = 3, 36 / 3 = 12 exist, etc...

                    $factorsCount += 2;
                } else {
                    // i = 6, 36 / 6 = 6 exist,
                    // we don't want to count same factor twice, so we add +1

                    $factorsCount += 1;
                }
            }
            $i++;
        }

        return $factorsCount;
    }
}

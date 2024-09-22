<?php

namespace codility\leader;

/**
A non-empty zero-indexed array A consisting of N integers is given.

The leader of this array is the value that occurs in more than half of the elements of A.

An equi leader is an index S such that 0 ≤ S < N − 1
and two sequences A[0], A[1], ..., A[S] and A[S + 1], A[S + 2], ..., A[N − 1]
have leaders of the same value.

For example, given array A such that:

    A[0] = 4
    A[1] = 3
    A[2] = 4
    A[3] = 4
    A[4] = 4
    A[5] = 2

we can find two equi leaders:

        0, because sequences: (4) and (3, 4, 4, 4, 2) have the same leader, whose value is 4.
        2, because sequences: (4, 3, 4) and (4, 4, 2) have the same leader, whose value is 4.

The goal is to count the number of equi leaders. Write a function:

    function solution($A);

that, given a non-empty zero-indexed array A consisting of N integers,
returns the number of equi leaders.

For example, given:

    A[0] = 4
    A[1] = 3
    A[2] = 4
    A[3] = 4
    A[4] = 4
    A[5] = 2

the function should return 2, as explained above.

Assume that:
        N is an integer within the range [1..100,000];
        each element of array A is an integer within the range [−1,000,000,000..1,000,000,000].

Complexity:
        expected worst-case time complexity is O(N);
        expected worst-case space complexity is O(N),
        beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.
*/
class EquiLeader
{
    /**
     * EquiLeader task.
     *
     * CODILITY ANALYSIS: https://codility.com/demo/results/trainingX4F44X-CKX/
     * LEVEL: EASY
     * Correctness: 100%
     * Performance: 100%
     * Task score:  100%
     *
     * @param array $A Non-empty zero-indexed array A consisting of N integers
     *
     * @return int The number of equi leaders
     */
    public function solution($A)
    {
        $leaderAndNumberOfOccurrences = $this->findLeaderAndNumberOfOccurrences($A);
        // If array $A doesn't have a leader
        if ($leaderAndNumberOfOccurrences === null) {
            return 0;
        }

        // Leader
        $leader = $leaderAndNumberOfOccurrences['leader'];
        // Leader number of occurences
        $leaderOccurrences = $leaderAndNumberOfOccurrences['occurrences'];
        // Number of integers in array $A
        $N = count($A);

        // Number of equi leaders
        $equiLeaders = 0;
        // Number of leaders in array $A subsequence
        $subSequenceLeaders = 0;

        foreach ($A as $key => $integer) {
            // Counting subsequence leaders, as we iterate through array $A subsequence grows,
            // first iteration subSequence:  [4]
            // second iteration subSequence: [4, 3]
            // third iteration subSequence:  [4, 3, 4]
            // etc.
            if ($integer === $leader) {
                $subSequenceLeaders++;
            }

            // If leader occurs in more than half of the elements in current subsequence,
            // and there is still remaining more leader occurences than other integers occurences
            // in remaining part of array $A, we have equi leader
            if ($subSequenceLeaders > ($key + 1) / 2 && ($leaderOccurrences - $subSequenceLeaders) > ($N - $key - 1) / 2) {
                $equiLeaders++;
            }
        }

        return $equiLeaders;
    }

    /**
     * Find leader of an array.
     *
     * @param array $A Non-empty zero-indexed array A consisting of N integers
     *
     * @return array|null
     * array if array $A has a leader: ['leader' => int, 'occurrences' => int],
     * null if array $A doesn't have a leader
     */
    public function findLeaderAndNumberOfOccurrences(array $A)
    {
        // Number of occurrences of each integer
        $integerOccurrences = [];
        // Maximum number of occurrences
        $maxOccurrences = 0;

        foreach ($A as $integer) {
            // Counting occurrences of each integer
            if (!isset($integerOccurrences[$integer])) {
                $integerOccurrences[$integer] = 1;
            } else {
                $integerOccurrences[$integer]++;
            }

            // Searching for integer with maxiumum occurences
            if ($integerOccurrences[$integer] > $maxOccurrences) {
                $maxOccurrences = $integerOccurrences[$integer];
                $leader = $integer;
            }
        }

        $N = count($A);
        // If leader is not set, or integer with maximum occurrences doesn't occur in more than half of the elements of $A
        if (!isset($leader) || ($maxOccurrences <= $N / 2)) {
            return null;
        }

        return ['leader' => $leader, 'occurrences' => $maxOccurrences];
    }
}

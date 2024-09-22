<?php

namespace codility\prime_and_composite_numbers;

/*
A non-empty zero-indexed array A consisting of N integers is given.

A peak is an array element which is larger than its neighbors. More precisely, it is an index P such that
0 < P < N − 1,  A[P − 1] < A[P] and A[P] > A[P + 1].

For example, the following array A:

    A[0] = 1
    A[1] = 2
    A[2] = 3
    A[3] = 4
    A[4] = 3
    A[5] = 4
    A[6] = 1
    A[7] = 2
    A[8] = 3
    A[9] = 4
    A[10] = 6
    A[11] = 2

has exactly three peaks: 3, 5, 10.

We want to divide this array into blocks containing the same number of elements. More precisely,
we want to choose a number K that will yield the following blocks:

        A[0], A[1], ..., A[K − 1],
        A[K], A[K + 1], ..., A[2K − 1],
        ...
        A[N − K], A[N − K + 1], ..., A[N − 1].

What's more, every block should contain at least one peak. Notice that extreme elements of the blocks
(for example A[K − 1] or A[K]) can also be peaks, but only if they have both neighbors
(including one in an adjacent blocks).

The goal is to find the maximum number of blocks into which the array A can be divided.

Array A can be divided into blocks as follows:

        one block (1, 2, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2). This block contains three peaks.
        two blocks (1, 2, 3, 4, 3, 4) and (1, 2, 3, 4, 6, 2). Every block has a peak.
        three blocks (1, 2, 3, 4), (3, 4, 1, 2), (3, 4, 6, 2). Every block has a peak.
        Notice in particular that the first block (1, 2, 3, 4) has a peak at A[3], because A[2] < A[3] > A[4],
        even though A[4] is in the adjacent block.

However, array A cannot be divided into four blocks, (1, 2, 3), (4, 3, 4), (1, 2, 3) and (4, 6, 2),
because the (1, 2, 3) blocks do not contain a peak. Notice in particular that the (4, 3, 4) block contains
two peaks: A[3] and A[5].

The maximum number of blocks that array A can be divided into is three.

Write a function:

    function solution($A);

that, given a non-empty zero-indexed array A consisting of N integers,
returns the maximum number of blocks into which A can be divided.

If A cannot be divided into some number of blocks, the function should return 0.

For example, given:

    A[0] = 1
    A[1] = 2
    A[2] = 3
    A[3] = 4
    A[4] = 3
    A[5] = 4
    A[6] = 1
    A[7] = 2
    A[8] = 3
    A[9] = 4
    A[10] = 6
    A[11] = 2

the function should return 3, as explained above.

Assume that:
        N is an integer within the range [1..100,000];
        each element of array A is an integer within the range [0..1,000,000,000].

Complexity:
        expected worst-case time complexity is O(N*log(log(N)));
        expected worst-case space complexity is O(N),
        beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.
*/
class Peaks
{
    /**
     * CODILITY ANALYSIS: https://codility.com/demo/results/trainingEAPVE2-AVD/
     * LEVEL: MEDIUM
     * Correctness: 100%
     * Performance: 100%
     * Task score:  100%
     *
     * @param array Non-empty zero-indexed array A consisting of N integers
     *
     * @return int The maximum number of blocks into which A can be divided
     */
    public function solution($A)
    {
        // Maximum number of blocks with a peak
        $maxBlocks = 0;

        $N = count($A);

        // Positions with peaks
        $peaksPositions = getPeaksPositions($A);

        $divisors = findDivisors($N);
        $blockSizes = array_slice($divisors, 1);

        // Searching for maximum number of blocks with all peaks
        foreach ($blockSizes as $blockSize) {
            $blockWithoutPeakFounded = false;

            // Iterating through every possible block size
            for ($i = $blockSize; $i <= $N; $i += $blockSize) {
                if ($i === $blockSize) {
                    // First block, we want to include first right block element

                    $blockStartPosition = 0;
                    $blockEndPosition = $blockSize;
                } elseif ($i === $N) {
                    // Last block, we want to include last left block element

                    $blockStartPosition = ($N - 1) - $blockSize;
                    $blockEndPosition = $N - 1;
                } else {
                    // We want to include last element of left block and first element of right block

                    $blockStartPosition = ($i - 1) - $blockSize;
                    $blockEndPosition = ($i - 1) + 1;
                }

                $blockHasPeak = doesBlockHavePeak($peaksPositions, $blockStartPosition, $blockEndPosition);
                // If block doesn't have a peak
                if (!$blockHasPeak) {
                    $blockWithoutPeakFounded = true;
                    break;
                }
            }

            // If we have founded maximum number of blocks with a peak
            if (!$blockWithoutPeakFounded) {
                $maxBlocks = $N / $blockSize;
                break;
            }
        }

        return $maxBlocks;
    }

    /**
     * Get peaks positions.
     *
     * @param array $A
     *
     * @return array
     * [
     *     int position => int peak,
     *     ...
     * ]
     */
    public function getPeaksPositions(array $A): array
    {
        $peaks = [];

        for ($i = 1; $i < count($A) - 1; $i++) {
            // If mountain top is larger than its neighbours
            if ($A[$i] > $A[$i - 1] && $A[$i] > $A[$i + 1]) {
                $peaks[] = $i;
            }
        }

        return $peaks;
    }

    /**
     * Finds all number divisors.
     *
     * @param int $N The number for which divisors are seeked
     *
     * @return array Divisors sorted ascending
     */
    public function findDivisors(int $N): array
    {
        // Divisors
        $divisors = [];

        // For example, if N = 36, divisors are [1, 2, 3, 4, 6, 9, 12, 18]
        // we use i * i < n formula to find divisors
        $i = 1;
        while ($i * $i <= $N) {
            if ($N % $i == 0) {
                if ($i * $i < $N) {
                    // Factors are mirrored
                    // i = 1, 36 / 1 = 36 exist,
                    // i = 2, 36 / 2 = 18 exist,
                    // i = 3, 36 / 3 = 12 exist,
                    // etc...

                    $divisors[] = $i;
                    $divisors[] = $N / $i;
                } else {
                    // Factors are requal
                    // i = 6, 36 / 6 = 6 exist

                    $divisors[] = $i;
                }
            }

            $i++;
        }
        sort($divisors);

        return $divisors;
    }

    /**
     * Does block contain a peak.
     *
     * @param array $peaksPositions Positions with peak
     * @param int $blockStartPosition First block position
     * @param int $blockEndPosition Last block position
     *
     * @return bool
     */
    public function doesBlockHavePeak(array $peaksPositions, int $blockStartPosition, int $blockEndPosition): bool
    {
        $beg = 0;
        $end = count($peaksPositions) - 1;

        $doesBlockHavePeak = false;
        while ($beg <= $end) {
            $mid = (int) (($beg + $end) / 2);

            // First and last element can't be peaks
            if ($peaksPositions[$mid] > $blockStartPosition && $peaksPositions[$mid] < $blockEndPosition) {
                $doesBlockHavePeak = true;
                break;
            } elseif ($peaksPositions[$mid] <= $blockStartPosition) {
                $beg = $mid + 1;
            } else {
                $end = $mid - 1;
            }
        }

        return $doesBlockHavePeak;
    }
}

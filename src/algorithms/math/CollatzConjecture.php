<?php

namespace algorithms\math;

/**
 * Collatz Conjecture (3n + 1 problem)
 *
 * Starting from any positive integer n, repeatedly apply:
 *  - even n: n = n / 2
 *  - odd n:  n = 3 * n + 1
 * The conjecture states the sequence always reaches 1.
 *
 * @see https://en.wikipedia.org/wiki/Collatz_conjecture
 */
final class CollatzConjecture
{
    /**
     * Number of steps required for the sequence to reach 1.
     *
     * @param int $n starting value, must be >= 1
     * @return int
     */
    public static function steps(int $n): int
    {
        return \count(self::sequence($n)) - 1;
    }

    /**
     * Full chain of values from $n down to 1 inclusive.
     *
     * @param int $n starting value, must be >= 1
     * @return int[]
     */
    public static function sequence(int $n): array
    {
        if ($n < 1) {
            throw new \InvalidArgumentException('Starting value must be a positive integer');
        }

        $sequence = [$n];

        while ($n !== 1) {
            $n = ($n % 2 === 0) ? intdiv($n, 2) : 3 * $n + 1;
            $sequence[] = $n;
        }

        return $sequence;
    }
}

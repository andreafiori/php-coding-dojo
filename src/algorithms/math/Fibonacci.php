<?php

namespace algorithms\math;

/**
 * Fibonacci sequence
 *
 * F(0) = 0, F(1) = 1, and F(n) = F(n-1) + F(n-2) for n >= 2.
 *
 * @see https://en.wikipedia.org/wiki/Fibonacci_number
 */
final class Fibonacci
{
    /**
     * Return the n-th Fibonacci number using the iterative (O(n)) form.
     *
     * @param int $n index in the sequence, 0-based
     * @return int
     */
    public static function get(int $n): int
    {
        self::ensureValidIndex($n);

        $previous = 0;
        $current = 1;

        for ($i = 0; $i < $n; $i++) {
            [$previous, $current] = [$current, $previous + $current];
        }

        return $previous;
    }

    /**
     * Return the sequence from F(0) up to and including F($n).
     *
     * @param int $n last index in the sequence, 0-based
     * @return int[]
     */
    public static function range(int $n): array
    {
        self::ensureValidIndex($n);

        $sequence = [0];
        $second = 0; // F(n-2)
        $first = 1;  // F(n-1)

        for ($i = 1; $i <= $n; $i++) {
            $sequence[] = $first;
            [$second, $first] = [$first, $first + $second];
        }

        return $sequence;
    }

    private static function ensureValidIndex(int $n): void
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Index must be a non-negative integer');
        }
    }
}


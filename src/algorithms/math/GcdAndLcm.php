<?php

namespace algorithms\math;

/**
 * Greatest common divisor and least common multiple
 *
 * GCD is computed with the Euclidean algorithm; LCM is derived from it via
 * a * b / gcd(a, b).
 *
 * @see https://en.wikipedia.org/wiki/Euclidean_algorithm
 */
final class GcdAndLcm
{
    /**
     * Greatest common divisor of the two non-negative integers.
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public static function gcd(int $a, int $b): int
    {
        self::ensureNonNegative($a, $b);

        while ($b !== 0) {
            [$a, $b] = [$b, $a % $b];
        }

        return $a;
    }

    /**
     * Least common multiple of the two non-negative integers.
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public static function lcm(int $a, int $b): int
    {
        if ($a === 0 || $b === 0) {
            return 0;
        }

        // divide before multiplying to reduce overflow risk
        return intdiv($a, self::gcd($a, $b)) * $b;
    }

    private static function ensureNonNegative(int $a, int $b): void
    {
        if ($a < 0 || $b < 0) {
            throw new \InvalidArgumentException('Arguments must be non-negative integers');
        }
    }
}

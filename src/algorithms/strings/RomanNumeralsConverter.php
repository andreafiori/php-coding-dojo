<?php

namespace algorithms\strings;

/**
 * Roman numerals
 * Wikipedia https://en.wikipedia.org/wiki/Roman_numerals
 *
 *  1 => I
 *  2 => II
 *  3 => III
 *  4 => IV
 *  5 => V
 *  6 => VI
 *  7 => VII
 *  8 => VIII
 *  9 => IX
 *  10 => X
 *  11 => XI
 *  12 => XII
 *  15 => XV
 *  20 => XX
 *  30 => XXX
 *  40 => XL
 *  41 => XLI
 *  44 => XLIV
 *  50 => L
 *  100 => C
 *  500 => D
 *  900 => CM
 *  1000 => M
 */
class RomanNumeralsConverter
{
	/**
	 * @var array
	 */
	protected static $lookup = [
		1000 => 'M',
		900  => 'CM',
		500  => 'D',
		400  => 'CD',
		100  => 'C',
		90   => 'XC',
		50   => 'L',
		40   => 'XL',
		10   => 'X',
		9    => 'IX',
		5    => 'V',
		4    => 'IV',
		1    => 'I'
	];

	/**
     * Convert number to Roman
     *
	 * @param $number
	 * @return string
	 */
	public function convert($number)
	{
		$this->guardAgainstInvalidNumber($number);

		$solution = '';

		foreach (static::$lookup as $limit => $glyph) {
			while ($number >= $limit) {
				$solution .= $glyph;
				$number -= $limit;
			}
		}

		return $solution;
	}

    /**
     * Check invalid number input
     *
     * @throws \InvalidArgumentException
     * @param $number
     */
	private function guardAgainstInvalidNumber($number)
	{
		if ($number <= 0) {
			throw new \InvalidArgumentException();
		}
	}
}

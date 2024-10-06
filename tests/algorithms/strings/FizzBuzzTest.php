<?php

namespace tests\algorithms\strings;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use algorithms\strings\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    #[DataProvider('numberToResult')]
    public function testNumberIsMappedToResult($number, $result)
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals($result, $fizzBuzz->say($number));
    }

    public static function numberToResult(): array
    {
        return array(
            array(1, '1'),
            array(3, 'fizz'),
            array(5, 'buzz'),
            array(6, 'fizz'),
            array(10, 'buzz'),
            array(15, 'fizzbuzz'),
            array(3*5*7, 'fizzbuzzbang'),
        );
    }
}
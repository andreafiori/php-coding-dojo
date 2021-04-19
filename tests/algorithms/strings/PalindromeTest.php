<?php

namespace test\math;

use PHPUnit\Framework\TestCase;
use algorithms\strings\Palindrome;

final class PalindromeTest extends TestCase
{
    public function testIsPalindromeNumber()
    {
        $this->assertFalse( Palindrome::isPalindromeNumber(12) );
        $this->assertTrue( Palindrome::isPalindromeNumber(1) );
        $this->assertTrue( Palindrome::isPalindromeNumber(121) );
    }

    public function testIsPalindrome()
    {
        $this->assertFalse( Palindrome::isPalindrome('asso') );
        $this->assertTrue( Palindrome::isPalindrome('a') );
        $this->assertTrue( Palindrome::isPalindrome('osso') );
    }

    public function testIsPalindromeRecursive()
    {
        $util = new Palindrome();

        $this->assertFalse( $util->isPalindromeRecursive('asso') );
        $this->assertTrue( $util->isPalindromeRecursive('a') );
        $this->assertTrue( $util->isPalindromeRecursive('osso') );
    }
}

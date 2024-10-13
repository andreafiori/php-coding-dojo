<?php

namespace tests\algorithms\strings;

use PHPUnit\Framework\TestCase;
use algorithms\strings\Palindrome;

class PalindromeTest extends TestCase
{
    public function testIsNotPalindromeNumber()
    {
        $this->assertFalse( Palindrome::isPalindromeNumber(12) );
    }
    public function testIsPPalindromeNumber()
    {
        $this->assertTrue( Palindrome::isPalindromeNumber(1) );
        $this->assertTrue( Palindrome::isPalindromeNumber(121) );
    }

    public function testIsNotPalindromeString()
    {
        $this->assertFalse( Palindrome::isPalindrome('asso') );
    }
    public function testIstPalindromeString()
    {
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

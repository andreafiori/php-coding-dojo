# PHP Code Dojo

[![Build Status](https://travis-ci.org/andreafiori/php-code-dojo.svg?branch=master)](https://travis-ci.org/andreafiori/php-code-dojo)

Data structures, algorithms, design patterns and code katas implementations with PHP with Unit Tests and documentation.

## Requirements

- PHP 8.2.4 compatible
- Composer

## Installation

    composer install

## Verify PHPUnit is installed correctly

On Windows:

	vendor\bin\phpunit --version

On Linux:

	./vendor/bin/phpunit --version

## Testing

Run the tests with PHPUnit:

    vendor\bin\phpunit -c tests

## Generate Code Coverage

Be sure to have the X-Debug PHP extension:

    vendor\bin\phpunit -c tests --coverage-html=coverage

Installing X-Debug:

- [Download X-Debug](https://xdebug.org/download) for you operating system
- In Windows: copy the dll file in the php\ext directory
- Rename the dll file to: php_xdebug.dll

Configuration on php.ini file:

    output_buffering=off

    [XDebug]
    zend_extension=xdebug
    xdebug.mode=debug,coverage
    xdebug.start_with_request=trigger

## PHPUnit test results

For each test run, the PHPUnit command-line tool prints one character to indicate progress:

. => Printed when a successful test has no issues
F => Printed when an assertion fails while running the test method
E => Printed when an error occurs while running the test method
W => Printed when the test triggered a warning
R => Printed when the test has been considered risky (see Risky Tests)
D => Printed when the test triggered a deprecation
N => Printed when the test triggered a notice
I => Printed when the test is marked as incomplete (see Incomplete Tests)
S => Printed when the test was skipped (see Skipping Tests)

To activate verbose mode, change testdox="false" to testdox="true" in phpunit.xml.

## Resources

- [PHPUnit](https://phpunit.de)
- [CodeKata.com](http://codekata.com)
- [Kata Catalogue](http://codingdojo.org/KataCatalogue/)
- [Data structure](https://en.wikipedia.org/wiki/Data_structure)
- [Algorithm](https://en.wikipedia.org/wiki/Algorithm)
- [Codility](https://www.codility.com)

# PHP Code Dojo

[![Build Status](https://travis-ci.org/andreafiori/php-code-dojo.svg?branch=master)](https://travis-ci.org/andreafiori/php-code-dojo)

Data structures, algorithms, design patterns and code katas implementations with PHP with Unit Tests and documentation.

## Requirements

PHP >= 7 and Composer are required.

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

## Resources

- [PHPUnit](https://phpunit.de)
- [CodeKata.com](http://codekata.com)
- [Kata Catalogue](http://codingdojo.org/KataCatalogue/)
- [Data structure](https://en.wikipedia.org/wiki/Data_structure)
- [Algorithm](https://en.wikipedia.org/wiki/Algorithm)

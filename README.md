# PHP Code Dojo

Data structures, algorithms, design patterns and code katas implementations with PHP with Unit Tests.

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

- [Kata Catalogue](http://codingdojo.org/KataCatalogue/)
- [CodeKata.com](http://codekata.com)
- [PHPUnit](https://phpunit.de)

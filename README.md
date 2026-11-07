# PHP Code Dojo

Data structures, algorithms, design patterns and code kata implementations in
PHP, each with PHPUnit tests and documentation.

## Requirements

- PHP >= 8.2 (locally verified on PHP 8.3)
- Composer 2

## Installation

```sh
composer install
```

Verify PHPUnit is installed:

```sh
vendor/bin/phpunit --version
```

(On Windows with cmd.exe use `vendor\bin\phpunit --version`.)

## Testing

The PHPUnit configuration lives in `tests/phpunit.xml`:

```sh
vendor/bin/phpunit -c tests
```

Useful variants:

```sh
# run a single test file
vendor/bin/phpunit -c tests tests/code_katas/games/BowlingGameTest.php

# run tests matching a name
vendor/bin/phpunit -c tests --filter testWin

# verbose, human-readable output (flip testdox="true" in tests/phpunit.xml)
vendor/bin/phpunit -c tests --testdox
```

### Generating code coverage

Requires the Xdebug or pcov extension. With Xdebug:

```sh
vendor/bin/phpunit -c tests --coverage-html=coverage
```

Xdebug setup on Windows:

1. [Download Xdebug](https://xdebug.org/download) for your OS/PHP version.
2. Copy the dll into the `php\ext` directory and rename it to `php_xdebug.dll`.
3. In `php.ini`:

```ini
output_buffering = Off

[xdebug]
zend_extension = xdebug
xdebug.mode = debug,coverage
xdebug.start_with_request = trigger
```

### Reading test output

PHPUnit prints one character per test:

| Char | Meaning |
| --- | --- |
| `.` | passed, no issues |
| `F` | an assertion failed |
| `E` | an error occurred while running the test |
| `W` | the test triggered a warning |
| `D` | the test triggered a deprecation |
| `N` | the test triggered a notice |
| `I` | test marked incomplete |
| `S` | test was skipped |
| `R` | test considered risky |

## Project structure

```
src/
  algorithms/       math, strings, search, graph
  code_katas/       bowling, tennis, mastermind, ...
  codility/         one folder per Codility lesson (brief + solution)
tests/              mirrors src/, same folder structure
  phpunit.xml       PHPUnit configuration
docs/               kata write-ups (leap years, string calculator, games)
notes/              exercise notes
```

## Resources

- [PHPUnit](https://phpunit.de)
- [CodeKata.com](http://codekata.com)
- [Coding Dojo kata catalogue](http://codingdojo.org/KataCatalogue/)
- [Codility](https://www.codility.com)
- [Data structures](https://en.wikipedia.org/wiki/Data_structure)
- [Algorithms](https://en.wikipedia.org/wiki/Algorithm)

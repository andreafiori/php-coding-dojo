# AGENTS.md

Guidance for AI coding agents (and humans) working in this repository.

## What this project is

A PHP code dojo: reference implementations of data structures, algorithms,
design patterns, code katas and Codility exercise solutions, each paired with
PHPUnit tests and markdown/PDF documentation. This is a learning catalogue —
prefer small, readable, idiomatic solutions over clever frameworks.

## Environment

- PHP >= 8.2 (locally tested on PHP 8.3.x via Laragon)
- Composer 2
- PHPUnit 11 (installed under `vendor/`), Mockery for some tests

## Commands

| Task | Command |
| --- | --- |
| Install dependencies | `composer install` |
| Refresh autoloader | `composer dump-autoload` |
| Run all tests | `vendor/bin/phpunit -c tests` |
| Run a single test file | `vendor/bin/phpunit -c tests tests/path/to/FileTest.php` |
| Run a single test method | `vendor/bin/phpunit -c tests --filter testMethodName` |
| Code coverage (HTML) | `vendor/bin/phpunit -c tests --coverage-html=coverage` (requires Xdebug or pcov) |

**On Windows, use forward slashes or doubled backslashes in shell commands;
PHPUnit binary is `vendor/bin/phpunit` (or `vendor\bin\phpunit` in cmd).**

## Layout & conventions

```
src/                    # solutions (algorithms, code_katas, codility, design patterns)
  algorithms/           # math, strings, search, graph
  code_katas/           # e.g. bowling, tennis, mastermind
  codility/             # one directory per Codility lesson, .md/.pdf brief + .php solution
tests/                  # mirrors src/ structure, tests\psr-4 namespace
  phpunit.xml           # PHPUnit config lives HERE, not in the repo root
  bootstrap.php         # requires vendor/autoload.php
docs/                   # kata write-ups (leap years, string calculator, games)
notes/                  # rough notes for katas
```

- Autoloading is **PSR-4, empty root namespace**: a class in
  `src/algorithms/math/Factorial.php` must be declared as
  `namespace algorithms\math;` (no top-level vendor prefix).
- Test files mirror the source path, e.g.
  `src/codility/arrays/OddOccurrencesInArray.php` →
  `tests/codility/arrays/OddOccurrencesInArrayTest.php` with
  `namespace tests\codility\arrays;`.
- PHPUnit's `<source>` block includes `../src` (relative to `tests/phpunit.xml`);
  keep this so coverage only measures solution code.
- `.gitignore` excludes `vendor/`, `coverage/`, `.phpunit.cache` and
  `composer.lock` — do not commit them.

## Rules for agents

- Before adding a new solution, add its test first (TDD style) and keep both in
  the mirrored directory structure above.
- New classes: `final` where reasonable, strict, dependency-light code; no new
  external runtime dependencies.
- Do not modify vendor/, coverage/, or cache directories.
- Keep Codility solutions next to their `.md`/`.pdf` brief in the same lesson
  folder.
- The test suite is expected to finish in well under a minute; do not add slow
  or networked tests.

## Known baseline (current)

- All test must pass.
- PHPUnit reports a number of deprecation warnings originating from the
  historical source code (e.g. implicit nullable parameters). These are
  acknowledged noise and are suppressed in `tests/phpunit.xml`; do not treat
  them as regressions unless the *count of failing tests* changes.

<?php

namespace tests\codility\stacks_and_queues;

use PHPUnit\Framework\TestCase;
use tests\utils\TestsAcceptance;
use codility\stacks_and_queues\Brackets;

class BracketsTest extends TestCase
{
    use TestsAcceptance;

    protected function setUp(): void
    {
        $this->fixture = new Brackets();
    }

    public static function acceptanceProvider(): array
    {
        return [
            [
                [''], 1
            ],
            [
                ['('], 0
            ],
            [
                ['())'], 0
            ],
            [
                ['()'], 1
            ],
            [
                ['()()'], 1
            ],
            [
                ['(())'], 1
            ],
            [
                ['()[]'], 1
            ],
            [
                ['[]{}'], 1
            ],
            [
                ['()[]{}'], 1
            ],
            [
                ['([{}])'], 1
            ],
            [
                ['({}[])'], 1
            ],
            [
                ['()))'], 0
            ],
            [
                ['((]]'], 0
            ],
            [
                ['()[]{{'], 0
            ]
        ];
    }
}

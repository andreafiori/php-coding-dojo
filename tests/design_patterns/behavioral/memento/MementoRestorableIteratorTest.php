<?php

namespace tests\design_patterns\behavioral\memento;

use PHPUnit\Framework\TestCase;
use design_patterns\behavioral\memento\restorable_iterator\RestorableIterator;
use design_patterns\behavioral\memento\restorable_iterator\Memento;

class MementoRestorableIteratorTest extends TestCase
{
    /**
     * @var RestorableIterator
     */
    private $restorableIterator;

    /**
     * @var Memento
     */
    private $memento;

    protected function setUp(): void
    {
        parent::setUp();

        $this->restorableIterator = new RestorableIterator(array('a', 'b', 'c', 'd'));
        $this->memento = new Memento($this->restorableIterator);

        $this->restorableIterator->next();
        $this->memento->save();
        $this->restorableIterator->next();
        $this->restorableIterator->next();
    }

    public function testIteratorBeforeRestore()
    {
        $this->assertEquals($this->restorableIterator->current(), 'd');
    }

    public function testIteratorAfterRestore()
    {
        $this->memento->restore();

        $this->assertEquals($this->restorableIterator->current(), 'b');
    }
}
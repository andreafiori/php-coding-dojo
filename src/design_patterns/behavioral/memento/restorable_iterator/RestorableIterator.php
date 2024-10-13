<?php

namespace design_patterns\behavioral\memento\restorable_iterator;

class RestorableIterator implements \Iterator, Restorable
{
    /**
     * @var array
     */
    private $_data;

    /**
     * @var int
     */
    private $_cursor = 0;

    /**
     * @var bool
     */
    private $_valid = false;

    /**
     * @param array $data
     */
    public function  __construct($data = [])
    {
        $this->_data = $data;
        $this->_valid = (bool)count($this->_data);
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->_data[$this->_cursor];
    }

    /**
     * Get cursor
     *
     * @return int
     */
    public function key(): mixed
    {
        return $this->_cursor;
    }

    /**
     * @inheritDoc
     */
    public function getState()
    {
        return $this->_cursor;
    }

    /**
     * @inheritDoc
     */
    public function setState($state)
    {
        $this->_cursor = $state;
    }

    /**
     * Next
     */
    public function next(): void
    {
        $max = count($this->_data) - 1;

        $this->_valid = $this->_cursor < $max ? (bool)(++$this->_cursor) : false;
    }

    /**
     * Rewind
     */
    public function rewind(): void
    {
        $this->_valid = (bool)count($this->_data);
        $this->_cursor = 0;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return $this->_valid;
    }
}

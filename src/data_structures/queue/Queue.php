<?php

namespace data_structures\queue;

class Queue
{
    /**
     * @var array
     */
    private $_items =[];

    /**
     * Enqueue
     *
     * @param null $value
     */
    public function enqueue($value = null) {
        array_unshift($this->_items, $value);
    }

    /**
     * Dequeue item
     *
     * @return mixed
     */
    public function dequeue() {
        return array_pop($this->_items);
    }

    /**
     * Peek items
     *
     * @return mixed
     */
    public function peek() {
        return end($this->_items);
    }

    /**
     * Size of the items
     *
     * @return int
     */
	public function size() {
		return count($this->_items);
	}

    /**
     * Check if items are empty
     *
     * @return bool
     */
	public function isEmpty() {
		return empty($this->_items);
	}
}

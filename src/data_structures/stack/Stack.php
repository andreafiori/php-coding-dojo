<?php

namespace data_structures\stack;

class Stack
{
    /**
     * @var array
     */
    private $_items = [];

    /**
     * Push element
     *
     * @param null $value
     */
    public function push($value = null) {
        array_push($this->_items, $value);
    }

    /**
     * Pop element
     *
     * @return mixed
     */
    public function pop() {
        return array_pop($this->_items);
    }

    /**
     * Peek last element of the items
     *
     * @return mixed
     */
    public function peek() {
        return end($this->_items);
    }

    /**
     * Size of items
     *
     * @return int
     */
	public function size() {
		return count($this->_items);
	}

    /**
     * Check if items list is empty
     *
     * @return bool
     */
	public function isEmpty() {
		return empty($this->_items);
	}
}

<?php

namespace data_structures\linked_lists;

class ListNode
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var mixed
     */
    public $next;

    /**
     * @var mixed
     */
    public $previous;

    /**
     * ListNode constructor.
     * @param $data
     */
    public function __construct($data) {
        $this->data = $data;
    }

    /**
     * Read node
     *
     * @return mixed
     */
    public function readNode() {
        return $this->data;
    }

}


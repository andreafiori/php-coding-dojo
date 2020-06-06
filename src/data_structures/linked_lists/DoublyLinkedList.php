<?php

namespace data_structures\linked_lists;

class DoublyLinkedList
{
    /**
     * @var ListNode
     */
    private $_firstNode;

    /**
     * @var ListNode
     */
    private $_lastNode;

    /**
     * @var int
     */
    private $_count;

    public function __construct() {
        $this->_firstNode = null;
        $this->_lastNode = null;
        $this->_count = 0;
    }

    /**
     * Check if the list is empty
     *
     * @return bool
     */
    public function isEmpty() {
        return ($this->_firstNode == null);
    }

    /**
     * Insert first
     *
     * @param $data
     */
    public function insertFirst($data) {
        $newLink = new ListNode($data);
        
        if($this->isEmpty()) {
            $this->_lastNode = $newLink;
        } else {
            $this->_firstNode->previous = $newLink;
        }
        
        $newLink->next = $this->_firstNode;
        $this->_firstNode = $newLink;
        $this->_count++;
    }

    /**
     * Insert last
     * 
     * @param $data
     */
    public function insertLast($data)
    {
        $newLink = new ListNode($data);
        
        if($this->isEmpty()) {
            $this->_firstNode = $newLink;
        } else {
            $this->_lastNode->next = $newLink;
        }
        
        $newLink->previous = $this->_lastNode;
        $this->_lastNode = $newLink;
        $this->_count++;
    }

    /**
     * Insert after
     * 
     * @param $key
     * @param $data
     * @return bool
     */
    public function insertAfter($key, $data)
    {
        $current = $this->_firstNode;
        
        while($current->data != $key) {
            $current = $current->next;
            
            if($current == null)
                return false;
        }
        
        $newLink = new ListNode($data);
        
        if($current == $this->_lastNode) {
            $newLink->next = null;
            $this->_lastNode = $newLink;
        } else {
            $newLink->next = $current->next;
            $current->next->previous = $newLink;
        }
        
        $newLink->previous = $current;
        $current->next = $newLink;
        $this->_count++;
        
        return true;
    }

    /**
     * Delete first node
     * 
     * @return null
     */
    public function deleteFirstNode()
    {
        $temp = $this->_firstNode;
        
        if($this->_firstNode->next == null) {
            $this->_lastNode = null;
        } else {
            $this->_firstNode->next->previous = null;
        }
        
        $this->_firstNode = $this->_firstNode->next;
        $this->_count--;
        return $temp;
    }

    /**
     * Delete last node
     *
     * @return ListNode|null
     */
    public function deleteLastNode()
    {
        $temp = $this->_lastNode;
        
        if ($this->_firstNode->next == null) {
            $this->firtNode = null;
        } else {
            $this->_lastNode->previous->next = null;
        }
        
        $this->_lastNode = $this->_lastNode->previous;
        $this->_count--;
        return $temp;
    }

    /**
     * Delete node
     *
     * @param $key
     * @return ListNode|mixed|null
     */
    public function deleteNode($key)
    {
        $current = $this->_firstNode;
        
        while($current->data != $key) {
            $current = $current->next;
            if($current == null)
                return null;
        }
        
        if($current == $this->_firstNode) {
            $this->_firstNode = $current->next;
        } else {
            $current->previous->next = $current->next;
        }
        
        if($current == $this->_lastNode) {
            $this->_lastNode = $current->previous;
        } else {
            $current->next->previous = $current->previous;
        }
        
        $this->_count--;

        return $current;
    }

    /**
     * Display forward
     */
    public function displayForward()
    {
        $nodeList = [];

        $current = $this->_firstNode;
        while($current != null) {
            $nodeList[] = $current->readNode();
            $current = $current->next;
        }

        return $nodeList;
    }

    /**
     * Display backward
     */
    public function displayBackward()
    {
        $nodeList = [];

        $current = $this->_lastNode;
        while($current != null) {
            $nodeList[] = $current->readNode();
            $current = $current->previous;
        }

        return $nodeList;
    }

    /**
     * Total nodes
     *
     * @return int
     */
    public function totalNodes()
    {
        return $this->_count;
    }

}

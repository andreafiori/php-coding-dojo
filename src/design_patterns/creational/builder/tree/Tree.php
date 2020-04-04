<?php

namespace design_patterns\creational\builder\tree;

/**
 * Tree implementation that contains one value and the references to the
 * left and right branches (other Tree objects).
 * This is our Product, which usually is not hidden with an interface
 * because of the very different Products that ConcreteBuilders create.
 */
class Tree
{
    /**
     * @var mixed
     */
    private $_value;
    /**
     * @var Tree
     */
    private $_left;
    /**
     * @var Tree
     */
    private $_right;

    /**
     * Tree constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->_value = $value;
    }

    /**
     * Get value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @return Tree
     */
    public function getLeft()
    {
        return $this->_left;
    }

    /**
     * Set left Tree
     *
     * @param Tree $t
     */
    public function setLeft(Tree $t)
    {
        $this->_left = $t;
    }

    /**
     * Get right tree
     *
     * @return Tree
     */
    public function getRight()
    {
        return $this->_right;
    }

    /**
     * Set right tree
     *
     * @param Tree $t
     */
    public function setRight(Tree $t)
    {
        $this->_right = $t;
    }

    /**
     * Prints values visiting Tree with in-order traversal
     *
     * @return string
     */
    public function dump()
    {
        $string = '';
        if ($this->_left) {
            $string .= $this->_left->dump();
        }
        $string .= " $this->_value ";
        if ($this->_right) {
            $string .= $this->_right->dump();
        }
        return $string;
    }
}

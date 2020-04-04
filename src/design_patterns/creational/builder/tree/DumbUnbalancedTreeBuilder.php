<?php

namespace design_patterns\creational\builder\tree;

/**
 * ConcreteBuilder. You can extract an interface TreeBuilder, based on
 * its three public methods, if there are multiple implementations of this
 * participant.
 * This class encapsulates the necessary logic to insert new subtrees
 * in the right points, maintaining the ordering between values (in-order
 * representation).
 */
class DumbUnbalancedTreeBuilder
{
    /**
     * @var null
     */
    private $_tree;

    /**
     * Reset tree
     */
    public function reset(): void
    {
        $this->_tree = null;
    }

    /**
     * Add number
     *
     * @param int $number
     */
    public function addNumber($number)
    {
        $this->_tree = $this->_addTo($this->_tree, $number);
    }

        /**
         * Add tree
         *
         * @param Tree|null $tree
         * @param int $number
         * @return Tree
         */
        private function _addTo($tree, $number)
        {
            if ($tree === null) {
                $tree = new Tree($number);
                return $tree;
            }

            if ($number < $tree->getValue()) {
                $tree->setLeft($this->_addTo($tree->getLeft(), $number));
            } else {
                $tree->setRight($this->_addTo($tree->getRight(), $number));
            }
            return $tree;
        }

    /**
     * Get tree
     *
     * @return Tree
     */
    public function getTree()
    {
        return $this->_tree;
    }
}

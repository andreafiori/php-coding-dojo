<?php

namespace design_patterns\structural\decorator\window;

class StandardWindow implements Window
{
    /**
     * @var bool
     */
    protected $_open = false;

    /**
     * @inheritDoc
     */
    public function isOpen()
    {
        return $this->_open;
    }

    /**
     * @inheritDoc
     */
    public function open()
    {
        if (!$this->_open) {
            $this->_open = true;
        }
    }

    /**
     * @inheritDoc
     */
    public function close()
    {
        if ($this->_open) {
            $this->_open = false;
        }
    }

}
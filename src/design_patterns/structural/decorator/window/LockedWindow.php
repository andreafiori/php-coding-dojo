<?php

namespace design_patterns\structural\decorator\window;

class LockedWindow implements Window
{
    /**
     * @var Window
     */
    protected $_window;

    /**
     * @param Window $window
     */
    public function __construct(Window $window)
    {
        $this->_window = $window;
        $this->_window->close();
    }

    /**
     * @return bool
     */
    public function isOpen()
    {
        return false;
    }

    /**
     * @throws \Exception
     */
    public function open()
    {
        throw new \Exception('Cannot open locked windows');
    }

    /**
     * Close window
     */
    public function close()
    {
        $this->_window->close();
    }
}
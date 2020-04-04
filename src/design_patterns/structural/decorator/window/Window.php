<?php

namespace design_patterns\structural\decorator\window;

interface Window
{
    /**
     * @return bool
     */
    public function isOpen();

    /**
     * Assert is open
     *
     * @return mixed
     */
    public function open();

    /**
     * Assert is close
     *
     * @return mixed
     */
    public function close();
}
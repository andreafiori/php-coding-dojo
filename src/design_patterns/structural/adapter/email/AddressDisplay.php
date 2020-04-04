<?php

namespace design_patterns\structural\adapter\email;

class AddressDisplay
{
    /**
     * @var string
     */
    private $addressType;

    /**
     * @var string
     */
    private $addressText;

    /**
     * Set address type
     *
     * @param $addressType
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
    }

    /**
     * Get address type
     *
     * @return mixed
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Set address
     *
     * @param $addressText
     */
    public function setAddressText($addressText)
    {
        $this->addressText = $addressText;
    }

    /**
     * Get address text
     *
     * @return mixed
     */
    public function getAddressText()
    {
        return $this->addressText;
    }

}
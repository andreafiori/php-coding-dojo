<?php

namespace design_patterns\structural\adapter\email;

class EmailAddress
{
    /**
     * @var string
     */
    private $emailAddress;

    /**
     * Get email address
     *
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param $address
     */
    public function setEmailAddress($address)
    {
        $this->emailAddress = $address;
    }
}
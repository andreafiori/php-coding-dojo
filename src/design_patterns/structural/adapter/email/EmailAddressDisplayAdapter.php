<?php

namespace design_patterns\structural\adapter\email;

class EmailAddressDisplayAdapter extends AddressDisplay
{
    /**
     * @param EmailAddress $emailAddr
     */
    public function __construct($emailAddr)
    {
        $this->setAddressType('email');
        $this->setAddressText($emailAddr->getEmailAddress());
    }
}

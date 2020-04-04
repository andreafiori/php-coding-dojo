<?php

namespace tests\design_patterns\structural\adapter;

use PHPUnit\Framework\TestCase;
use design_patterns\structural\adapter\email\EmailAddress;
use design_patterns\structural\adapter\email\EmailAddressDisplayAdapter;

class EmailAdapterTest extends TestCase
{
    public function testAdapter()
    {
        $email = new EmailAddress();
        $email->setEmailAddress('user@example.com');

        $address = new EmailAddressDisplayAdapter($email);

        $this->assertEquals($address->getAddressType(), 'email');
        $this->assertEquals($address->getAddressText(), 'user@example.com');
    }
}


<?php

namespace design_patterns\creational\multiton;

use PHPUnit\Framework\TestCase;

class DatabaseMultitonTest extends TestCase
{
    public function testDatabase()
    {
        // Create first instance to the master database
        Database::getInstance('master');
        $this->assertEquals( count(Database::getInstances()), 1);

        // Create second instance of this class for a logger database
        Database::getInstance('logger');
        $this->assertEquals( count(Database::getInstances()), 2);

        // Retrieve the existing 'master' instance from the multiton
        // this would normally be done in script, which doesn't have the instance already
        Database::getInstance('master');
        $this->assertEquals( count(Database::getInstances()), 2);

        // Database objects cannot be initialise with the new keyword, doing so will cause fatal errors
        // Fatal error: Call to private Database::__construct() from invalid context
        // $dbFatalError = new Database();

        // Database objects cannot be cloned, doing so will cause a fatal error
        // PHP Fatal error:  Call to private Database::__clone()
        // $dbCloneError = clone $masterDupe;
    }
}
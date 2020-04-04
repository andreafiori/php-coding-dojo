<?php

namespace design_patterns\creational\multiton;

use function PHPUnit\Framework\returnArgument;

class Database
{
	/**
	 * Used to store and provide instances for the getInstance() method
	 */ 
	private static $instances = [];
 
	/**
	 * Hidden constructor, only callable from within this class
	 */
	private function __construct() { }
 
	/**
	 * Create a new instance if one doesn't exist with the key provided.
	 * Once an instance has been created, or if it was already created, return it.
     *
	 * @param string $key
	 * @return self
	 */
	public static function getInstance($key)
    {
		// Check if an instance exists with this key already
		if(!array_key_exists($key, self::$instances)) {
			// instance doesn't exist yet, so create it
			self::$instances[$key] = new self();
		}
 
		// Return the correct instance of this class
		return self::$instances[$key];
	}

    /**
     * Get object instances
     *
     * @return array
     */
	public static function getInstances()
    {
        return self::$instances;
    }
 
	/**
	 * Hidden magic clone method, make sure no instances of this class 
	 * can be cloned using the clone keyword
	 */
	private function __clone() { }
}

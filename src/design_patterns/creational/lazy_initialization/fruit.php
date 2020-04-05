<?php


class Fruit
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
	private static $types = [];

	private function __construct($type) {
		$this->type = $type;
	}

	public static function getFruit($type) {
		// Lazy initialization takes place here
		if (!isset(self::$types[$type])) {
			self::$types[$type] = new Fruit($type);
		}

		return self::$types[$type];
	}

	public static function printCurrentTypes() {
		// echo 'Number of instances made: ' . count(self::$types) . "\n";
		foreach (array_keys(self::$types) as $key) {
			//TODO: put $key in a variable
            echo $key;
		}
	}
}


Fruit::getFruit('Apple');
Fruit::printCurrentTypes();

Fruit::getFruit('Banana');
Fruit::printCurrentTypes();

Fruit::getFruit('Apple');
Fruit::printCurrentTypes();

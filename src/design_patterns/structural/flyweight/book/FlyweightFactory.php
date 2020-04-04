<?php

namespace design_patterns\structural\flyweight\book;

class FlyweightFactory
{
    /**
     * @var array
     */
    private $books = [];

    public function __construct() {
        $this->books[1] = NULL;
        $this->books[2] = NULL;
        $this->books[3] = NULL;
    }

    /**
     * Get book
     *
     * @param $bookKey
     * @return mixed
     */
    public function getBook($bookKey) {
        if (null == $this->books[$bookKey]) {
            $makeFunction = 'makeBook'.$bookKey;
            $this->books[$bookKey] = $this->$makeFunction();
        }

        return $this->books[$bookKey];
    }

    /**
     * Sort of an long way to do this, but hopefully easy to follow.
     * How you really want to make flyweights would depend on what your application needs.
     * This, while a little clumbsy looking, does work well.
     *
     * @return FlyweightBook
     */
    public function makeBook1() {
        return new FlyweightBook('Larry Truett','PHP For Cats');
    }

    /**
     * Make book 2
     *
     * @return FlyweightBook
     */
    public function makeBook2() {
        return new FlyweightBook('Larry Truett','PHP For Dogs');
    }

    /**
     * Make book 3
     *
     * @return FlyweightBook
     */
    public function makeBook3() {
        return new FlyweightBook('Larry Truett','PHP For Parakeets');
    }

}
<?php

namespace design_patterns\behavioral\observer\newspaper;

class Newspaper implements \SplSubject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $observers = [];

    /**
     * @var string
     */
    private $content;

    /**
     * Set newspaper name
     *
     * @param string $name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function attach(\SplObserver $observer) {
        $this->observers[] = $observer;
    }

    /**
     * @inheritDoc
     */
    public function detach(\SplObserver $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    /**
     * Set breakouts news
     *
     * @param $content
     */
    public function breakOutNews($content) {
        $this->content = $content;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getContent() {
        return $this->content." ({$this->name})";
    }

    /**
     * @inheritDoc
     */
    public function notify() {
        foreach($this->observers as $value) {
            $value->update($this);
        }
    }
}

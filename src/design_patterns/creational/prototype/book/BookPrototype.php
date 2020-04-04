<?php

namespace design_patterns\creational\prototype\book;

abstract class BookPrototype
{
    /**
     * @var string
     */
	protected $title;

    /**
     * @var string
     */
	protected $topic;

	abstract function __clone();

	/**
     * Get title
     *
	 * @return mixed
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
     * Set title
     *
	 * @param $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

    /**
     * @param string $topic
     */
    public function setTopic(string $topic): void
    {
        $this->topic = $topic;
    }

    /**
     * Get topic
     *
     * @return string
     */
	public function getTopic() {
		return $this->topic;
	}
}

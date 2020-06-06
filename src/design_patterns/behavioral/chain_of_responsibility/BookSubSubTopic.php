<?php

namespace design_patterns\behavioral\chain_of_responsibility;

class BookSubSubTopic extends AbstractBookTopic
{
    /**
     * @var string
     */
	private $topic;

    /**
     * @var BookSubTopic
     */
	private $parentTopic;

    /**
     * @var string
     */
	private $title;

	/**
	 * @param $topic
	 * @param BookSubTopic $parentTopic
	 */
	public function __construct($topic, BookSubTopic $parentTopic) {
		$this->topic        = $topic;
		$this->parentTopic  = $parentTopic;
		$this->title        = null;
	}

    /**
     * Get topic
     *
     * @return string
     */
	public function getTopic() {
		return $this->topic;
	}

	/**
     * Get parent topic
     *
	 * @return BookSubTopic
	 */
	public function getParentTopic() {
		return $this->parentTopic;
	}

	/**
     * Get title
     *
	 * @return null|string
	 */
	public function getTitle() {
		if (null != $this->title) {
			return $this->title;
		}
		return $this->parentTopic->getTitle();
	}

	/**
     * Set title
     *
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
}
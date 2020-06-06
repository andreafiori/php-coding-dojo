<?php

namespace design_patterns\behavioral\chain_of_responsibility;

class BookSubTopic extends AbstractBookTopic
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
     * Set topic and parent topic
     *
	 * @param string $topic
	 * @param BookTopic $parentTopic
	 */
	public function __construct($topic, BookTopic $parentTopic) {
		$this->topic = $topic;
		$this->parentTopic = $parentTopic;
		$this->title = null;
	}

	/**
     * Get related topic
     *
	 * @return string
	 */
	public function getTopic() {
		return $this->topic;
	}

	/**
     * Get parent topic
     *
	 * @return BookTopic
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
	 * @inheritDoc
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
}
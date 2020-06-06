<?php

namespace design_patterns\behavioral\chain_of_responsibility;

abstract class AbstractBookTopic
{
    /**
     * Get topic
     *
     * @return mixed
     */
	abstract function getTopic();

    /**
     * Get title
     *
     * @return mixed
     */
	abstract function getTitle();

	/**
     * Set title
     *
	 * @param string $title
	 * @return mixed
	 */
	abstract function setTitle($title);
}
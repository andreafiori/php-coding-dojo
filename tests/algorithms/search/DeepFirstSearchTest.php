<?php

namespace algorithms\search;

use PHPUnit\Framework\TestCase;

class DeepFirstSearchTest extends TestCase
{
    public function testGetNode()
    {
        $arr = array(
            'a' => array(
                'b' => array(
                    'water'
                ),
                'c' => array(
                    'earth'
                )
            )
        );

        $this->assertEquals(DeepFirstSearch::getNode('a', $arr) , $arr['a']);
    }

    public function testGetSubNode()
    {
        $arr = array(
            'a' => array(
                'b' => array(
                    'c' => array(
                        'earth'
                    )
                ),
            )
        );

        $this->assertEquals(DeepFirstSearch::getNode('c', $arr) , $arr['a']['b']['c']);
    }
}
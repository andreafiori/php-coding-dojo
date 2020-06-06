<?php

namespace tests\data_structures\arrays;

use PHPUnit\Framework\TestCase;
use data_structures\arrays\ArrayTreeBuilder;

class ArrayTreeBuilderTest extends TestCase
{
    public function testBuildTree()
    {
        $treeRecursivery = ArrayTreeBuilder::buildRecursiveArrayTree(self::getInputSample());

        $this->assertTrue( is_array($treeRecursivery) && !empty($treeRecursivery) );
    }

    public function testBuildTreeWithInvalidInput()
    {
        $treeRecursivery = ArrayTreeBuilder::buildRecursiveArrayTree([]);

        $this->assertTrue( empty($treeRecursivery) );
    }

    public function testSortArrayByIds()
    {
        $inputSample = $this->getInputSample();
        $sortedArray = ArrayTreeBuilder::sortArrayByIds($inputSample);

        $this->assertEquals($sortedArray[1], $inputSample[0]);
    }

    /**
     * Get array input sample
     *
     * @return array
     */
    private function getInputSample()
    {
        return [
            [
                'id' 	 => 1,
                'name' 	 => 'Food',
                'parent' => 0
            ],
            [
                'id' 	 => 2,
                'name' 	 => 'Pizza',
                'parent' => 1,
            ],
            [
                'id' 	 => 3,
                'name' 	 => 'Margherita',
                'parent' => 2,
            ],
            [
                'id'	 => 4,
                'name' 	 => 'Pasta',
                'parent' => 1,
            ],
            [
                'id'	 => 4,
                'name' 	 => 'Chocolate',
                'parent' => 1,
            ],
            [
                'id'	 => 5,
                'name' 	 => 'Dark',
                'parent' => 4,
            ],
            [
                'id'	 => 6,
                'name' 	 => 'Novi',
                'parent' => 5,
            ],
        ];
    }
}
<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

// Resources for learning about arrays => https://www.w3schools.com/php/php_arrays.asp

class ArrayKoansSolution extends TestCase
{
    /**
     * @test
     * @testdox Index 0 is the first element of an array
     */
    public function getsTheValueOfTheFirstElementInAnArray()
    {
        $cars = array("BMW", "Mercedes", "Aston Martin");

        $this->assertEquals('BMW', $cars[0]);
    }

    /**
     * @test
     * @testdox Use count to calculate array lenght
     */
    public function getsTheLengthOfAnArray()
    {
        $fruits = array("Apple", "Banana", "Pineaple", "Cherry");

        $this->assertEquals(4, count($fruits));
    }

    /**
     * @test
     * @testdox Arrays can be of type key=>value => https://www.w3schools.com/php/php_arrays_associative.asp
     */
    public function getsTheAgeOnAssociativeArrays()
    {
        $age = array("Joe" => "49", "Mike" => "27", "Charles" => "32");

        // Extract Joe´s Age
        $this->assertEquals($age['Joe'], "49");
    }

    /**
     * @test
     * @testdox You can iterate through an array using loops => https://www.w3schools.com/php/php_looping_foreach.asp
     */
    public function getsAllTheValuesOfAnArrayUsingLoops()
    {
        $age = array("Joe" => "49", "Mike" => "27", "Charles" => "32");

        // Create a ForEach Loop to pass the test
        $result = '';
        foreach ($age as $key => $value) {
            $result .= "Key = $key, Value = $value ; ";
        }

        // Extract Joe´s Age
        $this->assertEquals($result, "Key = Joe, Value = 49 ; Key = Mike, Value = 27 ; Key = Charles, Value = 32 ; ");
    }

    /**
     * @test
     * @testdox An array can be made up of more arrays => https://www.w3schools.com/php/php_arrays_multidimensional.asp
     */
    public function getsValuesFromAMultidimensionalArray()
    {
        $cars = array (
            array("BMW","Blue","6913 CMC"),
            array("Mercedes","White","5052 ZZA"),
            array("Aston Martin","Black","3878 PXI")
        );

        // Extract the data to pass the test
        $this->assertEquals("Model Car: {$cars[0][0]}, Car Color: {$cars[1][1]}, Car Id: {$cars[2][2]}", "Model Car: BMW, Car Color: White, Car Id: 3878 PXI"); // phpcs:ignore
        $this->assertEquals("Model Car: {$cars[1][0]} , Car Color: {$cars[0][1]}, Car Id: {$cars[0][2]}", "Model Car: Mercedes , Car Color: Blue, Car Id: 6913 CMC"); // phpcs:ignore
        $this->assertEquals("Model Car: {$cars[2][0]} , Car Color: {$cars[2][1]}, Car Id: {$cars[1][2]}", "Model Car: Aston Martin , Car Color: Black, Car Id: 5052 ZZA"); // phpcs:ignore
    }

    /**
     * @test
     * @testdox You can sort an array in ascending order => https://www.w3schools.com/php/php_arrays_sort.asp
     */
    public function sortsAnArrayInAscendingOrder()
    {
        $numbers = array(3,2,2,1);

        // Sort the elements of the $numbers array in ascending order (Hint: There are functions to sort arrays)
        sort($numbers);

        $this->assertEquals($numbers[0], 1);
        $this->assertEquals($numbers[1], 2);
        $this->assertEquals($numbers[2], 2);
        $this->assertEquals($numbers[3], 3);
    }

    /**
     * @test
     * @testdox You can sort an array in descending order
     */
    public function sortsAnArrayInDescendingOrder()
    {
        $cars = array("BMW", "Mercedes", "Aston Martin");

        //Sort the elements of the $cars array in descending alphabetical order
        rsort($cars);

        $this->assertEquals($cars[0], 'Mercedes');
        $this->assertEquals($cars[1], 'BMW');
        $this->assertEquals($cars[2], 'Aston Martin');
    }
}

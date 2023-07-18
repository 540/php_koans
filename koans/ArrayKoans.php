<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

// Resources for learning about arrays => https://www.w3schools.com/php/php_arrays.asp
class ArrayKoans extends TestCase
{

    /**
     * @test
     * @testdox Index 0 is the first element of an array
     */
    public function getTheValueOfTheFirstElementInAnArray()
    {
        $cars = array("BMW", "Mercedes", "Aston Martin");

        $this->assertEquals(__, $cars[0]);
    }

    /**
     * @test
     * @testdox Use count to calculate array lenght
     */
    public function getTheLengthOfAnArray()
    {
        $fruits = array("Apple", "Banana", "Pineaple", "Cherry");

        $this->assertEquals(__, count($fruits));
    }

    /**
     * @test
     * @testdox Arrays can be of type key=>value => https://www.w3schools.com/php/php_arrays_associative.asp
     */
    public function getTheAgeOnAssociativeArrays()
    {
        $age = array("Joe"=>"49", "Mike"=>"27", "Charles"=>"32");

        // Extract Joe´s Age
        $this->assertEquals(__, "49");
    }

    /**
     * @test
     * @testdox You can iterate through an array using loops => https://www.w3schools.com/php/php_looping_foreach.asp
     */
    public function getAllTheValuesOfAnArrayUsingLoops()
    {
        $age = array("Joe"=>"49", "Mike"=>"27", "Charles"=>"32");

        // Create a ForEach Loop to pass the test

        // Extract Joe´s Age
        $this->assertEquals(__, "Key = Joe, Value = 49 ; Key = Mike, Value = 27 ; Key = Charles, Value = 32 ; ");
    }

    /**
     * @test
     * @testdox An array can be made up of more arrays => https://www.w3schools.com/php/php_arrays_multidimensional.asp
     */
    public function getValuesFromAMultidimensionalArray()
    {
        $cars = array (
            array("BMW","Blue","6913 CMC"),
            array("Mercedes","White","5052 ZZA"),
            array("Aston Martin","Black","3878 PXI")
        );

        // Extract the data to pass the test
        $this->assertEquals(__, "Model Car: BMW , Car Color: White, Car Id: 3878 PXI");
        $this->assertEquals(__, "Model Car: Mercedes , Car Color: Blue, Car Id: 6913 CMC");
        $this->assertEquals(__, "Model Car: Aston Martin , Car Color: Black, Car Id: 5052 ZZA");
    }

    /**
     * @test
     * @testdox You can sort an array in ascending order => https://www.w3schools.com/php/php_arrays_sort.asp
     */
    public function sortAnArrayInAscendingOrder()
    {
        $numbers = array(3,2,2,1);

        // Sort the elements of the $numbers array in ascending order (Hint: There are functions to sort arrays)

        $this->assertEquals(__,1);
        $this->assertEquals(__,2);
        $this->assertEquals(__,2);
        $this->assertEquals(__,3);
    }

    /**
     * @test
     * @testdox You can sort an array in descending order
     */
    public function sortAnArrayInDescendingOrder()
    {
        $cars = array("BMW", "Mercedes", "Aston Martin");

        //Sort the elements of the $cars array in descending alphabetical order

        $this->assertEquals(__, 'Mercedes');
        $this->assertEquals(__, 'BMW');
        $this->assertEquals(__, 'Aston Martin');
    }
}

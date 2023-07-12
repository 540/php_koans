<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;
use stdClass;

defined('__') or define('__', null);

class DataTypesKoansSolution extends TestCase
{
    // Resources for learning about Data Types => https://www.w3schools.com/php/php_datatypes.asp

    /**
     * @test
     * @testdox A string is a data type that is used to represent text
     */
    public function createStringUsingSingleOrDoubleQuotes()
    {
        $string = '3';

        $this->assertTrue(is_string($string));
    }

    /**
     * @test
     * @testdox Integers are numbers without decimals
     */
    public function createIntUsingNumbersWithoutDecimals()
    {
        $integer = 3;

        $this->assertTrue(is_int($integer));
    }

    /**
     * @test
     * @testdox Floats are numbers with decimal points
     */
    public function createFloatUsingNumbersWithDecimalPoints()
    {
        $float = 1.1;

        $this->assertTrue(is_float($float));
    }

    /**
     * @test
     * @testdox Booleans represent true or false values
     */
    public function createBooleansUsingTrueOrFalse()
    {
        $booleanTrue = true;
        $booleanFalse = false;

        $this->assertEquals(true, $booleanTrue);
        $this->assertEquals(false, $booleanFalse);
        $this->assertEquals(true, is_bool($booleanTrue));
        $this->assertEquals(true, is_bool($booleanFalse));
    }

    /**
     * @test
     * @testdox Arrays can hold multiple values
     */
    public function createArrayUsingBracketsOrArrayKeyword()
    {
        $array = [1, 2, 3];

        $this->assertEquals([1,2,3], $array);
        $this->assertEquals(true, is_array($array));
    }

    /**
     * @test
     * @testdox Objects are instances of classes
     */
    public function createObjectsUsingNewKeyword()
    {
        $object = new stdClass();

        $this->assertEquals(true, is_object($object));
    }

    /**
     * @test
     * @testdox Null represents the absence of a value
     */
    public function createNullUsingNullKeyword()
    {
        $null = null;

        $this->assertEquals(true, is_null($null));
    }

    /**
     * @test
     * @testdox Resources represent external resources (e.g., database connections, files...)
     */
    public function checkIfOurComposerFileIsAResource()
    {
        $resource = fopen('composer.json', 'r');

        $this->assertEquals(true, is_resource($resource));

        fclose($resource);
    }
}

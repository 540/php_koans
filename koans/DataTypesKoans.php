<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;
use stdClass;

defined('__') or define('__', null);

class DataTypesKoans extends TestCase
{
    /**
     * @testdox A string is a data type that is used to represent text
     */
    public function testCreateStringUsingSingleOrDoubleQuotes()
    {
        $string = 3;

        $this->assertTrue(is_string($string));
    }

    /**
     * @testdox Integers are numbers without decimals
     */
    public function testCreateIntUsingNumbersWithoutDecimals()
    {
        $integer = 'I want to be an int';

        $this->assertTrue(is_int($integer));
    }

    /**
     * @testdox Floats are numbers with decimal points
     */
    public function testCreateFloatUsingNumbersWithDecimalPoints()
    {
        $float = 1;

        $this->assertTrue(is_float($float));
    }

    /**
     * @testdox Booleans represent true or false values
     */
    public function testCreateBooleansUsingTrueOrFalse()
    {
        $booleanTrue = true;
        $booleanFalse = false;

        $this->assertEquals(__, $booleanTrue);
        $this->assertEquals(__, $booleanFalse);
        $this->assertEquals(__, is_bool($booleanTrue));
        $this->assertEquals(__, is_bool($booleanFalse));
    }

    /**
     * @testdox Arrays can hold multiple values
     */
    public function testCreateArrayUsingBrackets()
    {
        $array = [1, 2, 3];

        $this->assertEquals(__, $array);
        $this->assertEquals(__, is_array($array));
    }

    /**
     * @testdox Objects are instances of classes
     */
    public function testObjects()
    {
        $object = new stdClass();

        $this->assertEquals(__, is_object($object));
    }

    /**
     * @testdox Null represents the absence of a value
     */
    public function testNull()
    {
        $null = null;

        $this->assertEquals(__, is_null($null));
    }

    /**
     * @testdox Resources represent external resources (e.g., database connections, files...)
     */
    public function testResources()
    {
        $resource = fopen('composer.json', 'r');

        $this->assertEquals(__, is_resource($resource));

        fclose($resource);
    }
}

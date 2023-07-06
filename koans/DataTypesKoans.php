<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;
use stdClass;

defined('__') or define('__', null);

class DataTypesKoans extends TestCase
{
    /**
     * @testdox Strings can be created using single quotes
     */
    public function testStringsWithSingleQuotes()
    {
        $str = 'Hello, world!';

        $this->assertEquals(__, $str);
        $this->assertEquals(__, is_string($str));
    }

    /**
     * @testdox Strings can also be created using double quotes
     */
    public function testStringsWithDoubleQuotes()
    {
        $str = "Hello, world!";

        $this->assertEquals(__, $str);
        $this->assertEquals(__, is_string($str));
    }

    /**
     * @testdox Integers can be defined without decimal points
     */
    public function testIntegers()
    {
        $int = 42;

        $this->assertEquals(__, $int);
        $this->assertEquals(__, is_int($int));
    }

    /**
     * @testdox Floats are numbers with decimal points
     */
    public function testFloats()
    {
        $float = 3.14;

        $this->assertEquals(__, $float);
        $this->assertEquals(__, is_float($float));
    }

    /**
     * @testdox Booleans represent true or false values
     */
    public function testBooleans()
    {
        $boolTrue = true;
        $boolFalse = false;

        $this->assertEquals(__, $boolTrue);
        $this->assertEquals(__, $boolFalse);
        $this->assertEquals(__, is_bool($boolTrue));
        $this->assertEquals(__, is_bool($boolFalse));
    }

    /**
     * @testdox Arrays can hold multiple values
     */
    public function testArrays()
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

        $this->assertEquals(__, $object);
        $this->assertEquals(__, is_object($object));
    }

    /**
     * @testdox NULL represents the absence of a value
     */
    public function testNull()
    {
        $null = null;

        $this->assertEquals(__, $null);
        $this->assertEquals(__, is_null($null));
    }

    /**
     * @testdox Resources represent external resources (e.g., database connections, files...)
     */
    public function testResources()
    {
        $resource = fopen('./README.md', 'r');

        $this->assertEquals(__, is_resource($resource));

        fclose($resource);
    }
    
}

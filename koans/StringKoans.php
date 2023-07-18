<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

// Resources for learning about Strings => https://www.w3schools.com/php/php_string.asp
class StringKoans extends TestCase
{

    /**
     * @test
     * @testdox You can create strings using double quotes
     */
    public function useDoubleQuotesToCreateStrings()
    {
        $string = "Hello, world.";

        // is_string() returns a true or false
        $this->assertEquals(__, is_string($string));
    }

    /**
     * @test
     * @testdox You can use single quotes to create strings
     */
    public function useSingleQuotesToCreateStrings()
    {
        $string = 'Goodbye, world.';

        $this->assertEquals(__, is_string($string));
    }

    /**
     * @test
     * @testdox Use the backslash for escaping quotes in strings
     */
    public function useBackslashForEscapingQuotesInStrings()
    {
        $a = "He said, \"Don't\"";
        $b = 'He said, "Don\'t"';

        $this->assertEquals(__, ($a == $b));
    }

    /**
     * @test
     * @testdox Use single-quotes to create a string that contains double-quotes
     */
    public function useSingleQuotesToCreateAStringWithDoubleQuotes()
    {
        $string = 'He said, "Go Away."';

        $this->assertEquals(__, $string); // Replace __ with a double quoted escaped version of the string
    }

    /**
     * @test
     * @testdox Use double-quotes to create a string that contains single-quotes
     */
    public function useDoubleQuotesToCreateAStringWithSingleQuotes()
    {
        $string = "Don't";

        $this->assertEquals(__, $string); // Replace __ with a single quoted escaped version of the string
    }

    /**
     * @test
     * @testdox Strings can continue onto multiple lines
     */
    public function useMultipleLinesToContinueStrings()
    {
        $string = "It was the best of times,
        It was the worst of times.";

        // strlen() returns the length of a string as an integer (Hint: line breaks count as a character)
        $this->assertEquals(__, strlen($string));
    }

    /**
     * @test
     * @testdox A dot concatenates strings
     */
    public function useDotToConcatenateStrings()
    {
        $string = "Hello, " . "World";

        $this->assertEquals(__, $string);
    }

    /**
     * @test
     * @testdox Dot-concatenation works with variables
     */
    public function useDotToConcatenateStringsVariables()
    {
        $hi = "Hello, ";
        $there = "World";
        $string = $hi . $there;

        $this->assertEquals(__, $string);
    }

    /**
     * @test
     * @testdox Dot-concatenation will not modify the original strings
     */
    public function useDotToConcatenateStringsAndTheyWillNotBeModified()
    {
        $hi = "Hello, ";
        $there = "World";
        $string = $hi . $there;

        $this->assertEquals(__, $hi);
        $this->assertEquals(__, $there);
    }

    /**
     * @test
     * @testdox Dot-equals will append to the end of a string
     */
    public function useDotEqualsToAppendTheVariableToTheEndOfAString()
    {
        $hi = "Hello, ";
        $there = "World";
        $hi .= $there;

        $this->assertEquals(__, $hi);
    }
}

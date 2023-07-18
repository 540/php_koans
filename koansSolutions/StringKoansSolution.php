<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

// Resources for learning about Strings => https://www.w3schools.com/php/php_string.asp

class StringKoansSolution extends TestCase
{
    /**
     * @test
     * @testdox You can create strings using double quotes
     */
    public function usesDoubleQuotesToCreateStrings()
    {
        $string = "Hello, world.";

        // is_string() returns a true or false
        $this->assertEquals('Hello, world.', is_string($string));
    }

    /**
     * @test
     * @testdox You can use single quotes to create strings
     */
    public function usesSingleQuotesToCreateStrings()
    {
        $string = 'Goodbye, world.';

        $this->assertEquals(true, is_string($string));
    }

    /**
     * @test
     * @testdox Use the backslash for escaping quotes in strings
     */
    public function usesBackslashForEscapingQuotesInStrings()
    {
        $firstString = "He said, \"Don't\"";
        $secondString = 'He said, "Don\'t"';

        $this->assertEquals(true, ($firstString == $secondString));
    }

    /**
     * @test
     * @testdox Use single-quotes to create a string that contains double-quotes
     */
    public function usesSingleQuotesToCreateAStringWithDoubleQuotes()
    {
        $string = 'He said, "Go Away."';

        $this->assertEquals("He said, \"Go Away.\"", $string);
    }

    /**
     * @test
     * @testdox Use double-quotes to create a string that contains single-quotes
     */
    public function usesDoubleQuotesToCreateAStringWithSingleQuotes()
    {
        $string = "Don't";

        $this->assertEquals('Don\'t', $string); // Replace __ with a single quoted escaped version of the string
    }

    /**
     * @test
     * @testdox Strings can continue onto multiple lines
     */
    public function usesMultipleLinesToContinueStrings()
    {
        $string = "It was the best of times,
        It was the worst of times.";

        // strlen() returns the length of a string as an integer (Hint: line breaks count as a character)
        $this->assertEquals(60, strlen($string));
    }

    /**
     * @test
     * @testdox A dot concatenates strings
     */
    public function usesDotToConcatenateStrings()
    {
        $string = "Hello, " . "World";

        $this->assertEquals('Hello, World', $string);
    }

    /**
     * @test
     * @testdox Dot-concatenation works with variables
     */
    public function usesDotToConcatenateStringsVariables()
    {
        $hello = "Hello, ";
        $there = "World";
        $string = $hello . $there;

        $this->assertEquals('Hello, World', $string);
    }

    /**
     * @test
     * @testdox Dot-concatenation will not modify the original strings
     */
    public function usesDotToConcatenateStringsAndTheyWillNotBeModified()
    {
        $hello = "Hello, ";
        $there = "World";
        $string = $hello . $there;

        $this->assertEquals('Hello, ', $hello);
        $this->assertEquals('World', $there);
    }

    /**
     * @test
     * @testdox Dot-equals will append to the end of a string
     */
    public function usesDotEqualsToAppendTheVariableToTheEndOfAString()
    {
        $hello = "Hello, ";
        $there = "World";
        $hello .= $there;

        $this->assertEquals('Hello, World', $hello);
    }
}

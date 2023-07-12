<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class RegularExpressionsKoans extends TestCase
{
    /**
     * @testdox preg_match tells you if a string contains matches of a pattern.
     */
    public function testPatternExistOnAString()
    {
        $str = "PHP Koans have more Koans";
        $pattern = "/Koans/i";

        $this->assertEquals(__, preg_match($pattern, $str));
    }

    /**
     * @testdox preg_match_all tells you how many matches were found for a pattern in a string
     */
    public function testHowManyMatches()
    {
        $str = "Rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";

        $this->assertEquals(__, preg_match_all($pattern, $str));
    }

    /**
     * @testdox preg_replace replaces all of the matches of the pattern in a string with another string
     */
    public function testReplacesOfAllTheMatchesOfThePattern()
    {
        $str = "This is the python Koans, python Rules!.";
        $pattern = "";

        //Use the preg_replace function
        $str_replaced = "";
        $this->assertEquals($str_replaced, "This is the PHP Koans, PHP Rules!.");
    }
}

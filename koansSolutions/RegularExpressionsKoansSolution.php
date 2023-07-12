<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class RegularExpressionsKoansSolution extends TestCase
{
    // Resources for learning about Regular Expressions => https://www.w3schools.com/php/php_regex.asp

    /**
     * @test
     * @testdox preg_match tells you if a string contains matches of a pattern.
     */
    public function usePregMatchToFindPatternsInAString()
    {
        $str = "PHP Koans have more Koans";
        $pattern = "/Koans/i";

        $this->assertEquals(1, preg_match($pattern, $str));
    }

    /**
     * @test
     * @testdox preg_match_all tells you how many matches were found for a pattern in a string
     */
    public function usePregMatchAllToKnowHowManyPatternsThereAreInAString()
    {
        $str = "Rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";

        $this->assertEquals(4, preg_match_all($pattern, $str));
    }

    /**
     * @test
     * @testdox preg_replace replaces all of the matches of the pattern in a string with another string
     */
    public function usePregReplaceToReplaceAllTheMatchesInAStringWithAnotherString()
    {
        $str = "This is the python Koans, python Rules!.";
        $pattern = "";

        //Use preg_replace
        $str_replaced = preg_replace('/python/i', 'PHP', $str);
        $this->assertEquals($str_replaced, "This is the PHP Koans, PHP Rules!.");
    }
}

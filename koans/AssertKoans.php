<?php

namespace PhpKoans;

use koansResources\Classes\Enlightenment;
use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

// Resources for learning about assertions => https://phpunit.de/manual/6.5/en/appendixes.assertions.html

class AssertKoans extends TestCase
{
    /**
     * @test
     * @testdox We shall contemplate truth by testing reality, via asserts
     */
    public function checksThatTheAssertConditionIsTrue()
    {
        $this->assertTrue(false);
    }

    /**
     * @test
     * @testdox Enlightenment may be more easily achieved with appropriate messages
     */
    public function checksIfANonEmptyArrayIsFalse()
    {
        $this->assertTrue(false, "This should be True, please fix this");
    }

    /**
     * @test
     * @testdox You can use assertEquals to check that two things are equal
     */
    public function checksHowMuchIsOnePlusOne()
    {
        $this->assertEquals(__, 1 + 1);
    }

    /**
     * @test
     * @testdox To understand reality, we must compare our expectations against reality
     */
    public function checksIfTwoVariablesAreEqualUsingAssertTrue()
    {
        $expectedValue = __;
        $actualValue = 1 + 1;

        $this->assertTrue($expectedValue == $actualValue);
    }

    /**
     * @test
     * @testdox Some ways of asserting equality are better than others
     */
    public function checksIfTwoVariablesAreEqualUsingAssertEquals()
    {
        $expectedValue = __;
        $actualValue = 1 + 1;

        $this->assertEquals($expectedValue, $actualValue);
    }

    /**
     * @test
     * @testdox Sometimes we need to know the variable type
     */
    public function checksTheTypeOfAString()
    {
        $this->assertEquals(__, gettype("What am I"));
    }

    /**
     * @test
     * @testdox Sometimes we need to know the class type
     */
    public function checksTheTypeOfAClass()
    {
        // See bottom of this file for class definition
        $object = new Enlightenment();

        $this->assertEquals(__, get_class($object));
    }
}

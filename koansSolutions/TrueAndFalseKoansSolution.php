<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

// Resources for learning about Booleans => https://www.php.net/manual/es/language.types.boolean.php
class TrueAndFalseKoansSolution extends TestCase
{

    /**
     * @test
     * @testdox 3 and '3' are the same thing, but, the type? (Equal operator)
     */
    public function usesEqualOperatorToCheckIfStringAndIntAreEqual()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(true, $integer == $string);
    }

    /**
     * @test
     * @testdox 3 and '3' are identical, or not? (Identical operator)
     */
    public function usesIdenticalOperatorToCheckIfStringAndIntAreIdentical()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(false, $integer === $string);
    }

    /**
     * @test
     * @testdox It's the same with Not Equal Operator
     */
    public function usesNotEqualOperatorToCheckIfStringAndIntAreEqual()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(false, $integer != $string);
    }

    /**
     * @test
     * @testdox What happens if we use Not Identical Operator?
     */
    public function usesNotIdenticalOperatorToCheckIfStringAndIntAreIdentical()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(true, $integer !== $string);
    }

    /**
     * @test
     * @testdox There are more comparison operators => https://www.w3schools.com/php/php_operators.asp
     */
    public function usesMoreComparisonOperators()
    {
        $age = 22;
        $weight = 70;
        $wingspan = 70;

        $this->assertEquals(false, $age > $weight);
        $this->assertEquals(true, $age <= $wingspan);
        $this->assertEquals(true, $wingspan >= $weight);
    }

    /**
     * @test
     * @testdox When you don't say anything are you saying the truth?
     */
    public function checksIfAnEmptyStringIsTrue()
    {
        $this->assertEquals(false, '');
    }

    /**
     * @test
     * @testdox Is 0 false?
     */
    public function checksIfZeroIsTrue()
    {
        $this->assertEquals(false, 0);
        $this->assertEquals(false, '0');
    }

    /**
     * @test
     * @testdox Is 'false' false?
     */
    public function checksIfTheStringFalseIsReallyFalse()
    {
        $this->assertEquals(true, 'false');
    }

    /**
     * @test
     * @testdox What happens with empty arrays?
     */
    public function checksIfAnEmptyArrayIsTrue()
    {
        $this->assertEquals(false, boolval(array()));
    }

    /**
     * @test
     * @testdox What happens with NULL?
     */
    public function checksIfNullIsTrue()
    {
        $this->assertEquals(false, null);
    }
}

<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

// Resources for learning about Booleans => https://www.php.net/manual/es/language.types.boolean.php

class TrueAndFalseKoans extends TestCase
{
    /**
     * @test
     * @testdox 3 and '3' are the same thing, but, the type? (Equal operator)
     */
    public function usesTheEqualOperatorToCheckIfStringAndIntAreEqual()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(__, $integer == $string);
    }

    /**
     * @test
     * @testdox 3 and '3' are identical, or not? (Identical operator)
     */
    public function usesTheIdenticalOperatorToCheckIfStringAndIntAreIdentical()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(true, $integer === $string);
    }

    /**
     * @test
     * @testdox It's the same with Not Equal Operator
     */
    public function usesTheNotEqualOperatorToCheckIfStringAndIntAreEqual()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(true, $integer != $string);
    }

    /**
     * @test
     * @testdox What happens if we use Not Identical Operator?
     */
    public function usesTheNotIdenticalOperatorToCheckIfStringAndIntAreIdentical()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(false, $integer !== $string);
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

        $this->assertEquals(__, $age > $weight);
        $this->assertEquals(__, $age <= $wingspan);
        $this->assertEquals(__, $wingspan >= $weight);
    }

    /**
     * @test
     * @testdox When you don't say anything are you saying the truth?
     */
    public function checksIfAnEmptyStringIsTrue()
    {
        $this->assertEquals(__, '');
    }

    /**
     * @test
     * @testdox Is 0 false?
     */
    public function checksIfZeroIsTrue()
    {
        $this->assertEquals(__, 0);
        $this->assertEquals(__, '0');
    }

    /**
     * @test
     * @testdox Is 'false' false?
     */
    public function checksIfTheStringFalseIsReallyFalse()
    {
        $this->assertEquals(__, 'false');
    }

    /**
     * @test
     * @testdox What happens with empty arrays?
     */
    public function checksIfAnEmptyArrayIsTrue()
    {
        $this->assertEquals(__, boolval(array()));
    }

    /**
     * @test
     * @testdox What happens with NULL?
     */
    public function checksIfNullIsTrue()
    {
        $this->assertEquals(__, null);
    }
}

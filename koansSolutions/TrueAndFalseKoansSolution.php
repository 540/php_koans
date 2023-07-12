<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class TrueAndFalseKoansSolution extends TestCase
{
    // Resources for learning about Booleans => https://www.php.net/manual/es/language.types.boolean.php

    /**
     * @test
     * @testdox 3 and '3' are the same thing, but, the type? (Equal operator)
     */
    public function useTheEqualOperatorToCheckIfStringAndIntAreEqual()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(true, $integer == $string);
    }

    /**
     * @test
     * @testdox 3 and '3' are identical, or not? (Identical operator)
     */
    public function useTheIdenticalOperatorToCheckIfStringAndIntAreIdentical()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(false, $integer === $string);
    }

    /**
     * @test
     * @testdox It's the same with Not Equal Operator
     */
    public function useTheNotEqualOperatorToCheckIfStringAndIntAreEqual()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(false, $integer != $string);
    }

    /**
     * @test
     * @testdox What happens if we use Not Identical Operator?
     */
    public function useTheNotIdenticalOperatorToCheckIfStringAndIntAreIdentical()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(true, $integer !== $string);
    }

    /**
     * @test
     * @testdox There are more comparison operators => https://www.w3schools.com/php/php_operators.asp
     */
    public function useMoreComparisonOperators()
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
    public function checkIfAnEmptyStringIsTrue()
    {
        $this->assertEquals(false, '');
    }

    /**
     * @test
     * @testdox Is 0 false?
     */
    public function checkIfZeroIsTrue()
    {
        $this->assertEquals(false, 0);
        $this->assertEquals(false, '0');
    }

    /**
     * @test
     * @testdox Is 'false' false?
     */
    public function checkIfTheStringFalseIsReallyFalse()
    {
        $this->assertEquals(true, 'false');
    }

    /**
     * @test
     * @testdox What happen with empty arrays?
     */
    public function checkIfAnEmptyArrayIsTrue()
    {
        $this->assertEquals(false, boolval(array()));
    }

    /**
     * @test
     * @testdox What happen with NULL?
     */
    public function checkIfNullIsTrue()
    {
        $this->assertEquals(false, null);
    }
}

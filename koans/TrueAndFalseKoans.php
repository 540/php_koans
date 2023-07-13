<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class TrueAndFalseKoans extends TestCase
{
    /**
     * @testdox 3 and '3' are the same thing, but, the type? (Equal operator)
     */
    public function testStringAndIntAreEqualIfYouUseEqualOperator()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(__, $integer == $string);
    }

    /**
     * @testdox 3 and '3' are identical, or not? (Identical operator)
     */
    public function testStringAndIntAreNotIdenticalIfYouUseIdenticalOperator()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(true, $integer === $string);
    }

    /**
     * @testdox It's the same with Not Equal Operator
     */
    public function testWeCanUseNotEqual()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(true, $integer != $string);
    }

    /**
     * @testdox What happens if we use Not Identical Operator?
     */
    public function testWeCanUseNotIdentical()
    {
        $integer = 3;
        $string = '3';

        $this->assertEquals(false, $integer !== $string);
    }

    /**
     * @testdox There are more comparison operators
     */
    public function testMoreComparisonOperators()
    {
        $age = 22;
        $weight = 70;
        $wingspan = 70;

        $this->assertEquals(__, $age > $weight);
        $this->assertEquals(__, $age <= $wingspan);
        $this->assertEquals(__, $wingspan >= $weight);
    }

    /**
     * @testdox When you don't say anything are you saying the truth?
     */
    public function testWhatHappensWithEmptyStrings()
    {
        $this->assertEquals(__, '');
    }

    /**
     * @testdox Is 0 false?
     */
    public function testWhatHappensWithCero()
    {
        $this->assertEquals(__, 0);
        $this->assertEquals(__, '0');
    }

    /**
     * @testdox Is 'false' false?
     */
    public function testWhatHappensWithStrings()
    {
        $this->assertEquals(__, 'false');
    }

    /**
     * @testdox What happen with empty arrays?
     */
    public function testWhatHappensWithEmptyArrays()
    {
        $this->assertEquals(__, boolval(array()));
    }

    /**
     * @testdox What happen with NULL?
     */
    public function testWhatHappensWithNull()
    {
        $this->assertEquals(__, null);
    }
}

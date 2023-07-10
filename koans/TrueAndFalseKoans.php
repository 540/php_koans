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
        $int = 3;
        $str = '3';

        $this->assertEquals(__, $int==$str);
    }

    /**
     * @testdox 3 and '3' are identical, or not? (Identical operator)
     */
    public function testStringAndIntAreNotIdenticalIfYouUseIdenticalOperator()
    {
        $int = 3;
        $str = '3';

        $this->assertEquals(true, $int===$str);
    }

    /**
     * @testdox It's the same with Not Equal Operator
     */
    public function testWeCanUseNotEqual()
    {
        $int = 3;
        $str = '3';

        $this->assertEquals(true, $int!=$str);
    }

    /**
     * @testdox What happen if we use Not Identical Operator
     */
    public function testWeCanUseNotIdentical()
    {
        $int = 3;
        $str = '3';

        $this->assertEquals(false, $int!==$str);
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
    public function testWhatHappenWithEmptyStrings()
    {
        $this->assertEquals(__, '');
    }

    /**
     * @testdox Is 0 false?
     */
    public function testWhatHappenWithCero()
    {
        $this->assertEquals(__, 0);
        $this->assertEquals(__, '0');
    }

    /**
     * @testdox Is 'false' false?
     */
    public function testWhatHappenWithStrings()
    {
        $this->assertEquals(__, 'false');
    }

    /**
     * @testdox What happen with empty arrays?
     */
    public function testWhatHappenWithEmptyArrays()
    {
        $this->assertEquals(__, boolval(array()));
    }

    /**
     * @testdox What happen with NULL?
     */
    public function testWhatHappenWithNull()
    {
        $this->assertEquals(__, null);
    }

}

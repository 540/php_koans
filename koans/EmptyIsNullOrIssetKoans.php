<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class EmptyIsNullOrIssetKoans extends TestCase
{
    /**
     * @test is_null return true if variable is null => https://www.w3schools.com/php/func_var_is_null.asp
     */
    public function useIsNullMethodToCheckIfSomethingIsNull()
    {
        $this->assertEquals(__, is_null(null));
        $this->assertEquals(__, is_null(""));
    }

    /**
     * @test isset returns true if variable exists and it is not null => https://www.w3schools.com/php/func_var_isset.asp
     */
    public function useIssetMethodsToCheckIfTheVariableExistsAndItIsNotNull()
    {
        $this->assertEquals(__, isset($something));

        $array = array('bar' => 1, 'foo' => null);
        $this->assertEquals(__, isset($array));
        $this->assertEquals(__, isset($array['bar']));
        $this->assertEquals(__, isset($array['foo']));
        $this->assertEquals(__, isset($array['barfoo']));
    }

    /**
     * @test empty returns true if the variable is empty => https://www.w3schools.com/php/func_var_empty.asp
     */
    public function useEmptyMethodToCheckIfTheVariableIsEmpty()
    {
        //Working with integers.
        $this->assertEquals(__, empty(0));
        $this->assertEquals(__, empty(1));

        //Working with decimals.
        $this->assertEquals(__, empty(0.0));
        $this->assertEquals(__, empty(0.1));

        //Working wiht strings.
        $this->assertEquals(__, empty(""));
        $this->assertEquals(__, empty(" "));

        //Working with booleans.
        $this->assertEquals(__, empty(false));
        $this->assertEquals(__, empty(true));

        //working with arrays.
        $this->assertEquals(__, empty(array()));
        $this->assertEquals(__, empty(array(1)));

        //working with objects. Return true if value is an instance
        $this->assertEquals(__, empty((object)array()));
        $this->assertEquals(__, empty(null));
        $this->assertEquals(__, empty($something));
    }
}


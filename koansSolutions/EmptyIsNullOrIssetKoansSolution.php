<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class EmptyIsNullOrIssetKoansSolution extends TestCase
{
    /**
     * @test
     * @testdox is_null return true if variable is null => https://www.w3schools.com/php/func_var_is_null.asp
     */
    public function useIsNullMethodToCheckIfSomethingIsNull()
    {
        $this->assertEquals(true, is_null(null));
        $this->assertEquals(false, is_null(""));
    }

    /**
     * @test
     * @testdox isset returns true if variable exists and it is not null => https://www.w3schools.com/php/func_var_isset.asp
     */
    public function useIssetMethodsToCheckIfTheVariableExistsAndItIsNotNull()
    {
        $this->assertEquals(false, isset($something));

        $array = array('bar' => 1, 'foo' => null);
        $this->assertEquals(true, isset($array));
        $this->assertEquals(true, isset($array['bar']));
        $this->assertEquals(false, isset($array['foo']));
        $this->assertEquals(false, isset($array['barfoo']));
    }

    /**
     * @test
     * @testdox empty returns true if the variable is empty => https://www.w3schools.com/php/func_var_empty.asp
     */
    public function useEmptyMethodToCheckIfTheVariableIsEmpty()
    {
        //Working with integers.
        $this->assertEquals(true, empty(0));
        $this->assertEquals(false, empty(1));

        //Working with decimals.
        $this->assertEquals(true, empty(0.0));
        $this->assertEquals(false, empty(0.1));

        //Working wiht strings.
        $this->assertEquals(true, empty(""));
        $this->assertEquals(false, empty(" "));

        //Working with booleans.
        $this->assertEquals(true, empty(false));
        $this->assertEquals(false, empty(true));

        //working with arrays.
        $this->assertEquals(true, empty(array()));
        $this->assertEquals(false, empty(array(1)));

        //working with objects. Return true if value is an instance
        $this->assertEquals(false, empty((object)array()));
        $this->assertEquals(true, empty(null));
        $this->assertEquals(true, empty($something));
    }
}


<?php

namespace PhpKoans;

use PhpKoans\Classes\Greeting;
use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class CallbackFunctionsKoans extends TestCase
{
    /**
     * @testdox Callback functions can be invoked using the `call_user_func()` function
     */
    public function testInvokeCallbackFunction()
    {
        $callback = function ($name): string {
            return 'Hello, ' . $name . '!';
        };

        $result = call_user_func($callback, 'John');

        $this->assertEquals(__, $result);
    }

    /**
     * @testdox Callback functions can also be invoked using the `()` syntax
     */
    public function testInvokeCallbackFunctionWithParentheses()
    {
        $callback = function ($name): string {
            return 'Hello, ' . $name . '!';
        };

        $result = $callback('John');

        $this->assertEquals(__, $result);
    }

    /**
     * @testdox Callback functions can accept other functions as arguments
     */
    public function testAcceptFunctionAsArgument()
    {
        $callback = function ($name, $greetingFunction): string {
            return $greetingFunction($name);
        };

        $greeting = function ($name): string {
            return 'Hello, ' . $name . '!';
        };

        $result = $callback('John', $greeting);

        $this->assertEquals(__, $result);
    }

    /**
     * @testdox Callback functions can be defined as static methods of a class
     */
    public function testDefineStaticCallbackMethod()
    {
        $callback = [new Greeting(), 'greet'];

        $result = call_user_func($callback, 'John');

        $this->assertEquals(__, $result);
    }

    /**
     * @testdox Callback functions can be defined as instance methods of an object
     */
    public function testDefineInstanceCallbackMethod()
    {
        $greeting = new Greeting();
        $callback = [$greeting, 'greet'];

        $result = $callback('John');

        $this->assertEquals(__, $result);
    }

    /**
     * @testdox The `array_map()` function applies a callback function to each element of an array
     */
    public function testArrayMap()
    {
        $numbers = [1, 2, 3, 4, 5];

        $callback = function($number): int{
            return $number ** 2;
        };
        $result = array_map($callback, $numbers);

        $this->assertEquals(__, $result);
    }

    /**
     * @testdox The implementation of the callback function can be passed to array_map() as an argument
     */
    public function testArrayMapWithCallbackImplementationAsArgument()
    {
        $numbers = [1, 2, 3, 4, 5];

        $result = array_map(function ($number): int {
            return $number * 2;
        }, $numbers);

        $this->assertEquals(__, $result);
    }

    /**
     * @testdox The `array_filter()` function filters elements of an array using a callback function
     */
    public function testArrayFilter()
    {
        $numbers = [0=>1, 1=>2, 2=>3, 3=>4, 4=>5];

        $result = array_filter($numbers, function ($number): int {
            return $number % 2 === 0;
        });

        $this->assertEquals(__, $result);
    }
}

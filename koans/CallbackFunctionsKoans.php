<?php

namespace PhpKoans;

use PhpKoans\koansResources\Classes\Greeting;
use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class CallbackFunctionsKoans extends TestCase
{
    // Resources for learning about callbacks => https://www.php.net/manual/en/language.types.callable.php

    /**
     * @test
     * @testdox Callback functions can be invoked using the `call_user_func()` function
     */
    public function invokeCallbackFunction()
    {
        $callback = function ($name): string {
            return 'Hello, ' . $name . '!';
        };

        $result = call_user_func($callback, 'John');

        $this->assertEquals(__, $result);
    }

    /**
     * @test
     * @testdox Callback functions can also be invoked using the `()` syntax
     */
    public function invokeCallbackFunctionWithParentheses()
    {
        $callback = function ($name): string {
            return 'Hello, ' . $name . '!';
        };

        $result = $callback('John');

        $this->assertEquals(__, $result);
    }

    /**
     * @test
     * @testdox Callback functions can accept other functions as arguments
     */
    public function acceptFunctionAsArgument()
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
     * @test
     * @testdox Callback functions can be defined as static methods of a class
     */
    public function defineStaticCallbackMethod()
    {
        $callback = [new Greeting(), 'greet'];

        $result = call_user_func($callback, 'John');

        $this->assertEquals(__, $result);
    }

    /**
     * @test
     * @testdox Callback functions can be defined as instance methods of an object
     */
    public function defineInstanceCallbackMethod()
    {
        $greeting = new Greeting();
        $callback = [$greeting, 'greet'];

        $result = $callback('John');

        $this->assertEquals(__, $result);
    }

    /**
     * @test
     * @testdox The `array_map()` function applies a callback function to each element of an array => https://www.w3schools.com/php/func_array_map.asp
     */
    public function useArrayMapToChangeAnArrayUsingAFunction()
    {
        $numbers = [1, 2, 3, 4, 5];
        $callback = function($number): int{
            return $number ** 2;
        };
        
        $result = array_map($callback, $numbers);

        $this->assertEquals(__, $result);
    }

    /**
     * @test
     * @testdox The implementation of the callback function can be passed to array_map() as an argument
     */
    public function useArrayMapWithCallbackImplementationAsArgument()
    {
        $numbers = [1, 2, 3, 4, 5];

        $result = array_map(function ($number): int {
            return $number * 2;
        }, $numbers);

        $this->assertEquals(__, $result);
    }

    /**
     * @test
     * @testdox The `array_filter()` function filters elements of an array using a callback function => https://www.w3schools.com/php/func_array_filter.asp
     */
    public function useArrayFilterToFilterAnArrayUsingAFunction()
    {
        $numbers = [0=>1, 1=>2, 2=>3, 3=>4, 4=>5];

        $result = array_filter($numbers, function ($number): int {
            return $number % 2 === 0;
        });

        $this->assertEquals(__, $result);
    }
}

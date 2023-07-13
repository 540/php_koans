<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class FunctionsKoansSolution extends TestCase
{
    // Resources for learning about Functions => https://www.w3schools.com/php/php_functions.asp

    /**
     * @test
     * @testdox Functions can be defined using the 'function' keyword
     */
    public function useFunctionKeywordToDefineFunctions()
    {
        function sayHello(): string
        {
            return 'Hello, world!';
        }

        $this->assertEquals('Hello, world!', sayHello());
    }

    /**
     * @test
     * @testdox Functions can have arguments
     */
    public function useFunctionsArgumentsToPassInformationToFunctions()
    {
        function add($a, $b): int
        {
            return $a + $b;
        }

        $this->assertEquals(5, add(2, 3));
    }

    /**
     * @test
     * @testdox Functions can have default argument values
     */
    public function useDefaultArgumentsValues()
    {
        function greet($name = 'Guest'): string
        {
            return 'Hello, ' . $name . '!';
        }

        $result1 = greet();
        $result2 = greet('John');

        $this->assertEquals('Hello, Guest!', $result1);
        $this->assertEquals('Hello, John!', $result2);
    }

    /**
     * @test
     * @testdox Functions can return multiple values using an array or list
     */
    public function useMultipleReturnToReturnMultipleValues()
    {
        function getFullName(): array
        {
            $firstName = 'John';
            $lastName = 'Doe';

            return [$firstName, $lastName];
        }

        list($firstName, $lastName) = getFullName();

        $this->assertEquals('John', $firstName);
        $this->assertEquals('Doe', $lastName);
    }

    /**
     * @test
     * @testdox Functions can be recursive
     */
    public function useRecursionToCallTheFunctionInsideIt()
    {
        function factorial($n): int
        {
            if ($n === 0) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        $result = factorial(5);

        $this->assertEquals(120, $result);
    }
}

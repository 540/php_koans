<?php

namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class FunctionsKoans extends TestCase
{
    /**
     * @testdox Functions can be defined using the 'function' keyword
     */
    public function testMethodDefinition()
    {
        function sayHello(): string
        {
            return 'Hello, world!';
        }

        $this->assertEquals(__, sayHello());
    }

    /**
     * @testdox Functions can have parameters
     */
    public function testMethodParameters()
    {
        function add($a, $b): int
        {
            return $a + $b;
        }

        $this->assertEquals(__, add(2, 3));
    }

    /**
     * @testdox Functions can have default parameter values
     */
    public function testFunctionDefaultParameters()
    {
        function greet($name = 'Guest'): string
        {
            return 'Hello, ' . $name . '!';
        }

        $result1 = greet();
        $result2 = greet('John');

        $this->assertEquals(__, $result1);
        $this->assertEquals(__, $result2);
    }

    /**
     * @testdox Functions can return multiple values using an array or list
     */
    public function testFunctionMultipleReturnValues()
    {
        function getFullName(): array
        {
            $firstName = 'John';
            $lastName = 'Doe';

            return [$firstName, $lastName];
        }

        list($firstName, $lastName) = getFullName();

        $this->assertEquals(__, $firstName);
        $this->assertEquals(__, $lastName);
    }

    /**
     * @testdox Functions can be recursive
     */
    public function testRecursiveFunction()
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

        $this->assertEquals(__, $result);
    }
}

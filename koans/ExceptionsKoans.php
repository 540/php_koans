<?php

namespace PhpKoans;

use Exception;
use LogicException;
use PhpKoans\Exceptions\CustomGenericException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

defined('__') or define('__', null);

class ExceptionsKoans extends TestCase
{
    /**
     * @testdox Exceptions can be thrown using the `throw` keyword
     */
    public function testThrowException()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage(__);

        throw new Exception('Something went wrong');
    }

    /**
     * @testdox Catching exceptions using try-catch blocks
     */
    public function testCatchException()
    {
        try {
            throw new Exception('Something went wrong');
        } catch (Exception $e) {
            $this->assertEquals(__, $e->getMessage());
        }
    }

    /**
     * @testdox Catching multiple exceptions using separate catch blocks
     */
    public function testCatchMultipleExceptions()
    {
        try {
            throw new RuntimeException('Runtime exception occurred');
        } catch (RuntimeException $e) {
            $this->assertEquals(__, $e->getMessage());
        } catch (Exception $e) {
            $this->fail('Should not catch this exception');
        }
    }

    /**
     * @testdox Catching multiple exceptions using a single catch block
     */
    public function testCatchMultipleExceptionsSingleBlock()
    {
        try {
            throw new RuntimeException('Runtime exception occurred');
        } catch (RuntimeException|LogicException $e) {
            $this->assertEquals(__, $e->getMessage());
        } catch (Exception $e) {
            $this->fail('Should not catch this exception');
        }
    }

    /**
     * @testdox The finally block is executed regardless of whether an exception is thrown or caught
     */
    public function testFinallyBlock()
    {
        try {
            throw new Exception('Something went wrong');
        } catch (Exception $e) {
            $this->assertEquals(__, $e->getMessage());
        } finally {
            $this->assertTrue(__);
        }
    }

    /**
     * @testdox Custom exception classes can be defined by extending the base Exception class
     */
    public function testCustomExceptionClass()
    {
        $this->expectException(CustomGenericException::class);
        $this->expectExceptionMessage(__);

        throw new CustomGenericException();
    }
}

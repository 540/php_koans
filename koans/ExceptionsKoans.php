<?php

namespace PhpKoans;

use Exception;
use LogicException;
use PhpKoans\koansResources\Exceptions\CustomGenericException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

defined('__') or define('__', null);

class ExceptionsKoans extends TestCase
{
    // Resources for learning about Exceptions => https://www.w3schools.com/php/php_exceptions.asp

    /**
     * @test
     * @testdox Exceptions can be thrown using the `throw` keyword
     */
    public function useExpectExceptionMessageToMakeSureTheExceptionMessageIsWhatYouExpect()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage(__);

        throw new Exception('Something went wrong');
    }

    /**
     * @test
     * @testdox Catching exceptions using try-catch blocks
     */
    public function useTryCatchStatementToCatchExceptionsAndContinueTheProcess()
    {
        try {
            throw new Exception('Something went wrong');
        } catch (Exception $exception) {
            $this->assertEquals(__, $exception->getMessage());
        }
    }

    /**
     * @test
     * @testdox Catching multiple exceptions using separate catch blocks
     */
    public function useTwoCatchBlocksToCatchMultipleExceptions()
    {
        try {
            throw new RuntimeException('Runtime exception occurred');
        } catch (RuntimeException $exception) {
            $this->assertEquals(__, $exception->getMessage());
        } catch (Exception $exception) {
            $this->fail('Should not catch this exception');
        }
    }

    /**
     * @test
     * @testdox Catching multiple exceptions using a single catch block
     */
    public function catchMultipleExceptionsSingleBlockUsingPipes()
    {
        try {
            throw new RuntimeException('Runtime exception occurred');
        } catch (RuntimeException|LogicException $exception) {
            $this->assertEquals(__, $exception->getMessage());
        } catch (Exception $exception) {
            $this->fail('Should not catch this exception');
        }
    }

    /**
     * @test
     * @testdox The finally block is executed regardless of whether an exception is thrown or caught
     */
    public function useFinallyBlockToExecuteSomethingAtTheEndOfTheTryCatchBlock()
    {
        try {
            throw new Exception('Something went wrong');
        } catch (Exception $exception) {
            $this->assertEquals(__, $exception->getMessage());
        } finally {
            $this->assertTrue(__);
        }
    }

    /**
     * @test
     * @testdox Custom exception classes can be defined by extending the base Exception class
     */
    public function createCustomExceptionsByExtendingTheExceptionClass()
    {
        $this->expectException(CustomGenericException::class);
        $this->expectExceptionMessage(__);

        throw new CustomGenericException();
    }
}

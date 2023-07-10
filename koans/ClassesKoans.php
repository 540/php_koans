<?php

namespace PhpKoans;

use Error;
use PhpKoans\Classes\Car;
use PhpKoans\Classes\ExampleClass;
use PhpKoans\Classes\SportsCar;
use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class ClassesKoans extends TestCase
{
    /**
     * @testdox Classes can be defined using the `class` keyword and you can create multiple instances of a class (objects)
     */
    public function testInstanceOfAClass()
    {
        $exampleClass = 'I want to be an object of class ExampleClass';

        $this->assertTrue(is_object($exampleClass));
    }

    /**
     * @testdox Properties can be defined in a class
     */
    public function testClassProperties()
    {
        $exampleClass = new ExampleClass();

        $this->assertEquals(__, $exampleClass->exampleProperty);
    }

    /**
     * @testdox Methods can be defined in a class
     */
    public function testClassMethods()
    {
        $exampleClass = new ExampleClass();

        $this->assertEquals(__, $exampleClass->exampleMethod());
    }

    /**
     * @testdox Classes can have constructors
     */
    public function testClassConstructor()
    {
        $car = new Car(__, __);

        $this->assertEquals('blue', $car->color);
        $this->assertEquals('Ferrari', $car->getBrand());
    }

    /**
     * @testdox Classes can have getters and setters methods to access and set value to properties
     */
    public function testGettersAndSettersMethods()
    {
        $car = new Car('yellow', 'Aston Martin');

        $car->setColor('red');

        $this->assertEquals(__, $car->color);
        $this->assertEquals(__, $car->getBrand());
    }

    /**
     * @testdox Classes can have static properties and methods
     */
    public function testStaticPropertiesAndMethods()
    {
        Car::$counter++;

        $this->assertEquals(__, Car::$counter);
        $this->assertEquals(__, Car::getCount());
    }

    /**
     * @testdox Private methods and properties cannot be accessed directly from outside the class
     */
    public function testPrivateAccess()
    {
        $car = new Car('yellow', 'Mercedes');

        $this->expectException(Error::class);
        $this->expectExceptionMessage('Fix me');
        $car->secretProperty;
    }

    /**
     * @testdox Protected methods and properties cannot be accessed directly from outside the class
     */
    public function testProtectedAccess()
    {
        $car = new Car('yellow', 'Mercedes');

        $this->assertEquals('This is protected', $car->protectedProperty);
    }

    /**
     * @testdox Child classes can inherit properties and methods from their parent class
     */
    public function testInheritance()
    {
        $sportsCar = new SportsCar('blue', 'Toyota');

        SportsCar::$counter++;
        $sportsCar->setColor('red');

        $this->assertEquals(__,$sportsCar::getCount());
        $this->assertEquals(__, $sportsCar->color);
        $this->assertEquals(__, $sportsCar->getBrand());
    }

    /**
     * @testdox Child classes can override methods from the parent class
     */
    public function testMethodOverride()
    {
        $sportsCar = new SportsCar('yellow', 'Ferrari');

        $this->assertEquals('Engine started', $sportsCar->startEngine());
        $this->assertEquals('Driving at 200 km/h', $sportsCar->drive(200));
    }

    /**
     * @testdox The protected properties and methods are visible in the subclass, but the private ones not
     */
    public function testProtectedInheritance()
    {
        $sportsCar = new SportsCar('yellow', 'Ferrari');

        $this->assertEquals('This is protected', $sportsCar->getProtectedProperty());
        $this->assertEquals('Can I change?', $sportsCar->getSecret());
    }
}

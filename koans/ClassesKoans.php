<?php

namespace PhpKoans;

use Error;
use PhpKoans\Classes\Car;
use PhpKoans\Classes\ExampleClass;
use PhpKoans\Classes\SportCar;
use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class ClassesKoans extends TestCase
{
    // Resources for learning about Classes and Objects => https://www.w3schools.com/php/php_oop_classes_objects.asp

    /**
     * @test
     * @testdox Classes can be defined using the `class` keyword and you can create multiple instances of a class (objects)
     */
    public function defineAClassUsingClassKeyword()
    {
        $exampleClass = 'I want to be an object of class ExampleClass';

        $this->assertTrue(is_object($exampleClass));
    }

    /**
     * @test
     * @testdox Classes can have properties and can only be accessed if they are public https://www.w3schools.com/php/php_oop_access_modifiers.asp
     */
    public function accessToAPublicProperty()
    {
        $exampleClass = new ExampleClass();

        $this->assertEquals(__, $exampleClass->exampleProperty);
    }

    /**
     * @test
     * @testdox Methods can be defined in a class
     */
    public function useAMethodDefinedInExampleClass()
    {
        $exampleClass = new ExampleClass();

        $this->assertEquals(__, $exampleClass->exampleMethod());
    }

    /**
     * @test
     * @testdox Classes can have constructors => https://www.w3schools.com/php/php_oop_constructor.asp
     */
    public function useConstructorToInitializePropertiesUponCreationOfTheObject()
    {
        $car = new Car(__, __);

        $this->assertEquals('blue', $car->color);
        $this->assertEquals('Ferrari', $car->getBrand());
    }

    /**
     * @test
     * @testdox Classes can have getters and setters methods to access and set value to properties
     */
    public function useGettersAndSettersToSetAndGetPropertiesValues()
    {
        $car = new Car('yellow', 'Aston Martin');

        $car->setColor('red');

        $this->assertEquals(__, $car->color);
        $this->assertEquals(__, $car->getBrand());
    }

    /**
     * @test
     * @testdox Classes can have static properties and methods => https://www.w3schools.com/php/php_oop_static_properties.asp
     */
    public function useStaticPropertiesAndMethodsWithoutCreatingAnInstanceOfTheClass()
    {
        Car::$counter++;

        $this->assertEquals(__, Car::$counter);
        $this->assertEquals(__, Car::getCount());
    }

    /**
     * @test
     * @testdox Private methods and properties cannot be accessed directly from outside the class
     */
    public function useTheCorrectExceptionMessageToPassTheTest()
    {
        $car = new Car('yellow', 'Mercedes');

        $this->expectException(Error::class);
        $this->expectExceptionMessage('Fix me');
        $car->privateProperty;
    }

    /**
     * @test
     * @testdox Protected methods and properties cannot be accessed directly from outside the class
     */
    public function usePublicMethodsToAccessToProtectedProperties()
    {
        $car = new Car('yellow', 'Mercedes');

        $this->assertEquals('This is protected', $car->protectedProperty);
    }

    /**
     * @test
     * @testdox Child classes can inherit properties and methods from their parent class => https://www.w3schools.com/php/php_oop_inheritance.asp
     */
    public function usePublicAndProtectedMethodsAndPropertiesFromParentClassInTheChildClass()
    {
        $sportCar = new SportCar('blue', 'Toyota');

        SportCar::$counter++;
        $sportCar->setColor('red');

        $this->assertEquals(__, $sportCar::getCount());
        $this->assertEquals(__, $sportCar->color);
        $this->assertEquals(__, $sportCar->getBrand());
    }

    /**
     * @test
     * @testdox Child classes can override methods from the parent class
     */
    public function useTheOverridenMethodsInTheChildClass()
    {
        $sportCar = new SportCar('yellow', 'Ferrari');

        $this->assertEquals('Engine started', $sportCar->startEngine());
        $this->assertEquals('Driving at 200 km/h', $sportCar->drive(200));
    }

    /**
     * @test
     * @testdox The protected properties and methods are visible in the subclass, but the private ones not
     */
    public function checkIfYouHaveVisibilityOfPrivateAndProtectedPropertiesAndMethodsOfTheParentClassInTheChildClass()
    {
        $sportCar = new SportCar('yellow', 'Ferrari');

        $this->assertEquals('This is protected', $sportCar->getProtectedProperty());
        $this->assertEquals('Can I change?', $sportCar->getSecret());
    }
}

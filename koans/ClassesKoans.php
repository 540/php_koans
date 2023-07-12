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
     * @test Classes can be defined using the `class` keyword and you can create multiple instances of a class (objects)
     */
    public function defineAClassUsingClassKeyword()
    {
        $exampleClass = 'I want to be an object of class ExampleClass';

        $this->assertTrue(is_object($exampleClass));
    }

    /**
     * @test Classes can have properties and can only be accessed if they are public https://www.w3schools.com/php/php_oop_access_modifiers.asp
     */
    public function accessToAPublicProperty()
    {
        $exampleClass = new ExampleClass();

        $this->assertEquals(__, $exampleClass->exampleProperty);
    }

    /**
     * @test Methods can be defined in a class
     */
    public function useAMethodDefinedInExampleClass()
    {
        $exampleClass = new ExampleClass();

        $this->assertEquals(__, $exampleClass->exampleMethod());
    }

    /**
     * @test Classes can have constructors => https://www.w3schools.com/php/php_oop_constructor.asp
     */
    public function useConstructorToInitializePropertiesUponCreationOfTheObject()
    {
        $car = new Car(__, __);

        $this->assertEquals('blue', $car->color);
        $this->assertEquals('Ferrari', $car->getBrand());
    }

    /**
     * @test Classes can have getters and setters methods to access and set value to properties
     */
    public function useGettersAndSettersToSetAndGetPropertiesValues()
    {
        $car = new Car('yellow', 'Aston Martin');

        $car->setColor('red');

        $this->assertEquals(__, $car->color);
        $this->assertEquals(__, $car->getBrand());
    }

    /**
     * @test Classes can have static properties and methods => https://www.w3schools.com/php/php_oop_static_properties.asp
     */
    public function useStaticPropertiesAndMethodsWithoutCreatingAnInstanceOfTheClass()
    {
        Car::$counter++;

        $this->assertEquals(__, Car::$counter);
        $this->assertEquals(__, Car::getCount());
    }

    /**
     * @test Private methods and properties cannot be accessed directly from outside the class
     */
    public function useTheCorrectExceptionMessageToPassTheTest()
    {
        $car = new Car('yellow', 'Mercedes');

        $this->expectException(Error::class);
        $this->expectExceptionMessage('Fix me');
        $car->secretProperty;
    }

    /**
     * @test Protected methods and properties cannot be accessed directly from outside the class
     */
    public function usePublicMethodsToAccessToProtectedProperties()
    {
        $car = new Car('yellow', 'Mercedes');

        $this->assertEquals('This is protected', $car->protectedProperty);
    }

    /**
     * @test Child classes can inherit properties and methods from their parent class => https://www.w3schools.com/php/php_oop_inheritance.asp
     */
    public function usePublicAndProtectedMethodsAndPropertiesFromParentClassInTheChildClass()
    {
        $sportsCar = new SportCar('blue', 'Toyota');

        SportCar::$counter++;
        $sportsCar->setColor('red');

        $this->assertEquals(__, $sportsCar::getCount());
        $this->assertEquals(__, $sportsCar->color);
        $this->assertEquals(__, $sportsCar->getBrand());
    }

    /**
     * @test Child classes can override methods from the parent class
     */
    public function useTheOverridenMethodsInTheChildClass()
    {
        $sportsCar = new SportCar('yellow', 'Ferrari');

        $this->assertEquals('Engine started', $sportsCar->startEngine());
        $this->assertEquals('Driving at 200 km/h', $sportsCar->drive(200));
    }

    /**
     * @test The protected properties and methods are visible in the subclass, but the private ones not
     */
    public function checkIfYouHaveVisibilityOfPrivateAndProtectedPropertiesAndMethodsOfTheParentClassInTheChildClass()
    {
        $sportsCar = new SportCar('yellow', 'Ferrari');

        $this->assertEquals('This is protected', $sportsCar->getProtectedProperty());
        $this->assertEquals('Can I change?', $sportsCar->getSecret());
    }
}

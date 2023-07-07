<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class ClassesKoans extends TestCase
{
    /**
     * @testdox Classes can be defined using the `class` keyword and you can create multiple instances of a class (objects)
     */
    public function testClassDefinition()
    {
        $exampleClass = new ExampleClass();

        $this->assertTrue(__, class_exists('ExampleClass'));
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

        $this->expectException(\Error::class);
        $this->expectExceptionMessage('Fix me');
        $car->secretProperty;

        $this->expectException(\Error::class);
        $this->expectExceptionMessage('Fix me');
        $car->secretMethod();
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
        $car = new SportsCar('blue', 'Toyota');

        $this->assertEquals(__, $car->color);
        $this->assertEquals(__, $car->getBrand());

        $car->setColor('red');

        $this->assertEquals('blue', $car->color);
        $this->assertEquals(__, $car->getBrand());
    }

    /**
     * @testdox Child classes can override methods from the parent class
     */
    public function testMethodOverride()
    {
        $sportsCar = new SportsCar('yellow', 'Ferrari');

        $this->assertEquals('Engine started!', $sportsCar->startEngine());
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

class ExampleClass{
    public string $exampleProperty ='Hi, I\'m a property';
    public function exampleMethod(): string
    {
        return 'Hi, I\'m a method';
    }
}

class Car
{
    public string $color;
    private string $brand;
    private string $secretProperty = 'This is a secret';
    protected string $protectedProperty = 'This is protected';

    public function __construct($color, $brand)
    {
        $this->color = $color;
        $this->brand = $brand;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getSecret(): string
    {
        return $this->secretProperty;
    }

    public function getProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function startEngine(): string
    {
        return 'Engine started!';
    }

    public function drive($speed): string
    {
        return 'Driving at ' . $speed . ' km/h';
    }

    private function secretMethod(): string
    {
        return 'This is a secret method';
    }

    public static int $counter = 0;

    public static function getCount(): int
    {
        return self::$counter;
    }

}

class SportsCar extends Car
{
    protected string $protectedProperty = 'The protected properties are visible in the subclass';
    private string $secretProperty = 'Can I change?';

    public function startEngine(): string
    {
        return 'Engine started with turbo!';
    }

    public function drive($speed): string
    {
        return 'Driving at ' . $speed . ' m/h';
    }

}

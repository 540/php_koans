<?php

namespace PhpKoans\Classes;

class Car
{
    public string $color;
    private string $brand;
    private string $secretProperty = 'This is a secret';
    protected string $protectedProperty = 'This is protected';
    public static int $counter = 0;

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

    public static function getCount(): int
    {
        return self::$counter;
    }
}

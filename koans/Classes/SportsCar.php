<?php

namespace PhpKoans\Classes;

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

<?php

namespace PhpKoans\Classes;

class Greeting
{
    public function greet($name): string
    {
        return 'Hello, ' . $name . '!';
    }
}

<?php


namespace App\Structural\Decorator;


class Circle implements Shape
{

    public function draw(): string
    {
        return strtoupper(class_basename(self::class));
    }
}
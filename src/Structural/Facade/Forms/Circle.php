<?php


namespace App\Structural\Facade\Forms;


class Circle implements Shape
{

    public function draw(): string
    {
        return strtoupper(class_basename(self::class));
    }
}
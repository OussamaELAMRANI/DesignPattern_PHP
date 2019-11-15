<?php


namespace App\Structural\Facade\Forms;


class Rectangle implements Shape
{

    public function draw()
    {
        return strtoupper(class_basename(self::class));
    }
}
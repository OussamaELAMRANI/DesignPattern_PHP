<?php


namespace App\Structural\Decorator;


class Square implements Shape
{

    public function draw()
    {
        return strtoupper(class_basename(self::class));
    }
}
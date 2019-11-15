<?php


namespace App\Structural\Facade\Forms;


class Square implements Shape
{

    public function draw()
    {
        return strtoupper(class_basename(self::class));
    }
}
<?php


namespace App\_Factory\Forms;


use App\_Factory\ShapeInterface;

class Square implements ShapeInterface
{

    public function draw(): string
    {
        return "[SQUARE]";
    }
}
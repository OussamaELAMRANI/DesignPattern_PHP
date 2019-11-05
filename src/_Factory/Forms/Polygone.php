<?php


namespace App\_Factory\Forms;


use App\_Factory\ShapeInterface;

class Polygone implements ShapeInterface
{

    public function draw(): string
    {
        return "{POLYGONE}";
    }
}
<?php


namespace App\_Factory\Forms;


use App\_Factory\ShapeInterface;

class Rectangle implements ShapeInterface
{

    /**
     * @Override
     */
    public function draw(): string
    {
        return "[RECTANGLE]";
    }

}
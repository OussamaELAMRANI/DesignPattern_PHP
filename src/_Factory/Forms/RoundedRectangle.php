<?php


namespace App\_Factory\Forms;


use App\_Factory\ShapeInterface;

class RoundedRectangle implements ShapeInterface
{

    /**
     * @Override
     */
    public function draw(): string
    {
        return "[RoundedRectangle]";
    }

}
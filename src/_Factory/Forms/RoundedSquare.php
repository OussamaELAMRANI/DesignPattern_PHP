<?php


namespace App\_Factory\Forms;



use App\_Factory\ShapeInterface;

class RoundedSquare implements ShapeInterface
{

    /**
     * @Override
     */
    public function draw(): string
    {
        return "[RoundedSquare]";
    }

}
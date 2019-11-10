<?php


namespace App\_Prototype\Forms;


class Square extends Shape
{

    public function __construct()
    {
        $this->type = "Square";
    }

    public function draw()
    {
        return "[] SQUARE::draw()";
    }


    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
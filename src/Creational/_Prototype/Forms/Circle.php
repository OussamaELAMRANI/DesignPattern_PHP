<?php


namespace App\_Prototype\Forms;


class Circle extends Shape
{

    public function __construct()
    {
        $this->type = "Circle";
    }

    public function draw()
    {
        return "() CIRCLE::draw()";
    }

    function __clone()
    {
//        $this->type = $this->getType();
    }
}
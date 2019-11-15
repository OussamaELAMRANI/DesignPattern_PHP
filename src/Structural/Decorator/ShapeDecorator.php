<?php


namespace App\Structural\Decorator;


abstract class ShapeDecorator
{
    protected $shape;

    /**
     * ShapeDecorator constructor.
     * @param $shape
     */
    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    public function draw()
    {
        return $this->shape->draw();
    }
}
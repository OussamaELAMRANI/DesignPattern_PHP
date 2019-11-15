<?php


namespace App\Structural\Decorator;


class RedShapeDecorator extends ShapeDecorator
{

    public function draw()
    {
        $colored = $this->red($this->shape);

        return $colored;
    }

    private function red(Shape $shape)
    {
        return $shape->draw() . '|' . 'RED';
    }
}
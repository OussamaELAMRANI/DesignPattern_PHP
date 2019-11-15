<?php


namespace App\Structural\Decorator;


class TransparentShapeDecorator extends ShapeDecorator
{

    public function draw()
    {
        $colored = $this->red($this->shape);

        return $colored;
    }

    private function red(Shape $shape)
    {
        return $shape->draw() . '|' . 'TRANSPARENT';
    }
}
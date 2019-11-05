<?php


namespace App\_Factory;


use App\_Factory\Forms\Polygone;
use App\_Factory\Forms\Rectangle;
use App\_Factory\Forms\RoundedRectangle;
use App\_Factory\Forms\RoundedSquare;
use App\_Factory\Forms\Square;

class RoundedShapeFactory extends AbstractFactory
{

    /**
     * @param string $type
     * @return ShapeInterface
     */
    public function getShape($type = null): ShapeInterface
    {
        switch ($type) {
            case 'SQUARE':
                return new RoundedSquare();
                break;
            case 'RECTANGLE':
                return new RoundedRectangle();
                break;
            default:
                return new Polygone();
        }
    }


}
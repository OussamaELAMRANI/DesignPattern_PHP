<?php


namespace App\_Factory;


use App\_Factory\Forms\Polygone;
use App\_Factory\Forms\Rectangle;
use App\_Factory\Forms\Square;

class ShapeFactory extends AbstractFactory
{

    /**
     * @param string $type
     * @return ShapeInterface
     */
    public function getShape($type = null): ShapeInterface
    {
        switch ($type) {
            case 'SQUARE':
                return new Square();
                break;
            case 'RECTANGLE':
                return new Rectangle();
                break;
            default:
                return new Polygone();
        }
    }


}
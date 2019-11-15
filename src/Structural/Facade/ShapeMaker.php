<?php


namespace App\Structural\Facade;


use App\Structural\Facade\Forms\Circle;
use App\Structural\Facade\Forms\Rectangle;
use App\Structural\Facade\Forms\Shape;
use App\Structural\Facade\Forms\Square;

class ShapeMaker
{
    /**
     * @var Shape
     */
    private $square;
    /**
     * @var Shape
     */
    private $circle;
    /**
     * @var Shape
     */
    private $rectangle;


    public function __construct()
    {
        $this->square = new Square();
        $this->circle = new Circle();
        $this->rectangle = new Rectangle();
    }


    public function drawCircle()
    {
        return $this->circle->draw();
    }

    public function drawSquare()
    {
        return $this->square->draw();

    }

    public function drawRectangle()
    {
        return $this->rectangle->draw();

    }


}
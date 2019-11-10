<?php


namespace App\Structural\Bridge;


use App\Structural\Bridge\API\DrawAPI;

class Circle extends Shape
{

    private $x;
    private $y;
    private $radius;

    public function __construct(DrawAPI $drawAPI, $x, $y, $radius)
    {
        parent::__construct($drawAPI);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function draw()
    {
        return "CIRCLE: " . $this->drawAPI->drawCircle($this->radius, $this->x, $this->y);
    }
}
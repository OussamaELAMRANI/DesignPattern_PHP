<?php


namespace App\Structural\Bridge;


use App\Structural\Bridge\API\DrawAPI;

abstract class Shape
{
    protected $drawAPI;

    public function __construct(DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    public abstract function draw();

}
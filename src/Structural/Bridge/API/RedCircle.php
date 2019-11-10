<?php


namespace App\Structural\Bridge\API;


class RedCircle implements DrawAPI
{

    public function drawCircle(float $radius, int $x, int $y)
    {
        return "RED";
    }

}
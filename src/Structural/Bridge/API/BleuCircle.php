<?php


namespace App\Structural\Bridge\API;


class BleuCircle implements DrawAPI
{

    public function drawCircle(float $radius, int $x, int $y)
    {
        return "BLUE";
    }
}
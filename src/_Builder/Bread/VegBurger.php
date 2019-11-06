<?php


namespace App\_Builder\Bread;


class VegBurger extends Burger
{
    public function name(): string
    {
        return "VeganBurger";
    }

    public function price(): float
    {
        return 10;
    }

}
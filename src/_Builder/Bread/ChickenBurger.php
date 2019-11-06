<?php


namespace App\_Builder\Bread;


class ChickenBurger extends Burger
{
    public function name(): string
    {
        return "ChickenBurger";
    }

    public function price(): float
    {
        return 12;
    }
}
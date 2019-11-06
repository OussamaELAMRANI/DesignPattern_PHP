<?php


namespace App\_Builder\Drink;


class Coke extends ColdDrink
{

    public function name(): string
    {
        return "Coca Cola";
    }

    public function price(): float
    {
        return 4.0;
    }
}
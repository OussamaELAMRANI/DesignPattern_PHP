<?php


namespace App\_Builder\Drink;


class Pepsi extends ColdDrink
{

    public function name(): string
    {
        return "Pepsi";
    }

    public function price(): float
    {
        return 3.5;
    }
}
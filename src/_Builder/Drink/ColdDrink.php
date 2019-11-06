<?php


namespace App\_Builder\Drink;


use App\_Builder\Item;
use App\_Builder\Package\Bottle;
use App\_Builder\Package\Packing;

abstract class ColdDrink implements Item
{

    abstract public function name(): string;
    abstract public function price(): float;


    public function packing(): Packing
    {
        return new Bottle();
    }

}
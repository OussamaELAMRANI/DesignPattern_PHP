<?php

namespace App\_Builder\Bread;

use App\_Builder\Item;
use App\_Builder\Package\Packing;
use App\_Builder\Package\Wrapper;

abstract class Burger implements Item
{

    abstract public function name(): string;

    abstract public function price(): float;


    public function packing(): Packing
    {
        return new Wrapper();
    }
}
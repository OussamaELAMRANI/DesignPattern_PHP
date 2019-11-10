<?php


namespace App\_Builder\Package;


class Bottle implements Packing
{

    public function pack(): string
    {
        return "Bottle";
    }
}
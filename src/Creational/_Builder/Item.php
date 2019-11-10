<?php


namespace App\_Builder;


use App\_Builder\Package\Packing;

interface Item
{
    public function name(): string;

    public function packing(): Packing;

    public function price(): float;

}
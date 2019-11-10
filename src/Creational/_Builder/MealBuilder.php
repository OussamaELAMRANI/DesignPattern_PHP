<?php


namespace App\_Builder;


use App\_Builder\Bread\ChickenBurger;
use App\_Builder\Bread\VegBurger;
use App\_Builder\Drink\Coke;
use App\_Builder\Drink\Pepsi;

class MealBuilder
{
    public function prepareVegMeal(): Meal
    {
        $meal = new Meal();
        $meal->add(new VegBurger());
        $meal->add(new Pepsi());

        return $meal;
    }

    public function prepareNoVegMeal(): Meal
    {
        $meal = new Meal();
        $meal->add(new ChickenBurger());
        $meal->add(new Coke());

        return $meal;
    }
}
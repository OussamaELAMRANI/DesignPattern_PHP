<?php


namespace Tests\unit;


use App\_Builder\MealBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    /**
     * @test
     */
    public function it_a_vegan_meal()
    {
        $vegan = (new MealBuilder())->prepareVegMeal();

        $cost = $vegan->getCost();
        $show = $vegan->showItems();

        $this->assertEquals(13.5, $cost);
        echo json_encode($show);
    }

    /**
     * @test
     */
    public function it_a_no_vegan_meal()
    {
        $vegan = (new MealBuilder())->prepareNoVegMeal();

        $cost = $vegan->getCost();
        $show = $vegan->showItems();

        $this->assertEquals(16, $cost);

        echo "\n";
        echo json_encode($show);

    }
}
<?php


namespace App\_Builder;


use Illuminate\Support\Collection;

class Meal
{
    /**
     * @var Collection
     */
    private $items;

    public function __construct()
    {
        $this->items = collect();
    }

    public function add(Item $item): void
    {
        $this->items->add($item);
    }

    public function getCost(): float
    {
        $cost = $this->items->sum(function ($meal) {
            if ($meal instanceof Item)
                return (new $meal)->price();

            return 0;
        });

        return $cost;
    }

    public function showItems()
    {
        $items = $this->items->toArray();
        $show = [];
        foreach ($items as $item) {
            /**
             * @var Meal
             */
            $meal = new $item;
            $show[] = [
                'name' => $meal->name(),
                'price' => $meal->price(),
                'pack' => ($meal->packing())->pack(),
            ];
        }

        return $show;
    }
}
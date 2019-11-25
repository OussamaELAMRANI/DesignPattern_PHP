<?php


namespace App\Structural\Flyweight;


use Illuminate\Support\Collection;

class ShapeFactory
{
    /**
     * @var Collection
     */
    private static $circleMap = null;


    public static function getShape(string $color): Shape
    {
        if (is_null(self::$circleMap))
            self::$circleMap = collect();

        $circle = self::$circleMap->get($color);

        if (is_null($circle)) {
            $circle = new Circle(0, 0, 10, $color);
            self::$circleMap->put($color, $circle);
        }

        return $circle;
    }

    public static function size():int
    {
        return self::$circleMap->count();
    }
}
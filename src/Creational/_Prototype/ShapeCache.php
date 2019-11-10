<?php


namespace App\_Prototype;


use App\_Prototype\Forms\Circle;
use App\_Prototype\Forms\Shape;
use App\_Prototype\Forms\Square;
use Illuminate\Support\Collection;

class ShapeCache
{

    /**
     * @var Collection
     */
    private static $shapeMap = null;

    /**
     * @param string $id
     * @return Shape
     */
    public static function getShape(string $id): Shape
    {
        /**
         * @var Shape
         */
        $shapes = self::$shapeMap->get($id);

        return clone $shapes;
    }

    public static function initCache()
    {
        if (is_null(self::$shapeMap))
            self::$shapeMap = collect(null);
    }


    public static function loadCache()
    {
        self::initCache();

        $circle = new Circle();
        $circle->setId("circle_1");

        $square = new Square();
        $square->setId("square_1");

        self::$shapeMap->put($circle->getId(), $circle);
        self::$shapeMap->put($square->getId(), $square);
    }

}
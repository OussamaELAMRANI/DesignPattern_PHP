<?php


namespace App\_Factory;


class FactoryProducer
{
    public static function getFactoryKind($isRounded = false): AbstractFactory
    {
        if ($isRounded)
            return new RoundedShapeFactory();

        return new ShapeFactory();
    }
}
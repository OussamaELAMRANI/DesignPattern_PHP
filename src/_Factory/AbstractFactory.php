<?php


namespace App\_Factory;


abstract class AbstractFactory
{
    /**
     * @param string $type
     * @return ShapeInterface
     */
    abstract public function getShape(string $type): ShapeInterface;
}
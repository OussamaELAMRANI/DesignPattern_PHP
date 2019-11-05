<?php

namespace Tests\unit;

use App\_Factory\FactoryProducer;
use App\_Factory\Forms\Rectangle;
use App\_Factory\Forms\Square;
use App\_Factory\ShapeFactory;

use PHPUnit\Framework\TestCase;

class ShapeTest extends TestCase
{

    /**
     * @test
     */
    public function it_square_shape()
    {
        $normalFactory = FactoryProducer::getFactoryKind();
        $roundedFactory = FactoryProducer::getFactoryKind(true);

        $square = $roundedFactory;
        $rectangle = $normalFactory;

        $shape1 = $rectangle->getShape('SQUARE')->draw();
        $shape2 = $square->getShape('RECTANGLE')->draw();
        $shape3 = $square->getShape('SHAPE')->draw();


//
        $this->assertEquals("[SQUARE]", $shape1);
        $this->assertEquals("[RoundedRectangle]", $shape2);

        $this->assertEquals('{POLYGONE}',$shape3);

    }
}

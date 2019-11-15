<?php


namespace Tests\Unit;


use App\Structural\Decorator\Circle;
use App\Structural\Decorator\RedShapeDecorator;
use App\Structural\Decorator\Square;
use App\Structural\Decorator\TransparentShapeDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @test
     */
    public function it_a_red_shape()
    {
        $sq = new Square();
        #red Square
        $redSquare = new RedShapeDecorator($sq);

        $this->assertEquals("SQUARE|RED", $redSquare->draw());
    }

    /**
     * @test
     */
    public function it_a_transparent_shape()
    {
        $circle = new Circle();
        $transparent = new TransparentShapeDecorator($circle);

        $this->assertEquals('CIRCLE|TRANSPARENT', $transparent->draw());
    }
}
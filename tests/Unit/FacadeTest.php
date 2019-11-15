<?php


namespace Tests\Unit;


use App\Structural\Facade\ShapeMaker;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{

    /**
     * @test
     */
    public function it_a_shape_maker()
    {
        $maker = new ShapeMaker();

        $this->assertEquals("CIRCLE", $maker->drawCircle());
        $this->assertEquals("SQUARE", $maker->drawSquare());
        $this->assertEquals("RECTANGLE", $maker->drawRectangle());
    }
}
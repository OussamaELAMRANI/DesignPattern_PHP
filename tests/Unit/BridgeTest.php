<?php


namespace Tests\Unit;


use App\Structural\Bridge\API\BleuCircle;
use App\Structural\Bridge\API\RedCircle;
use App\Structural\Bridge\Circle;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{

    /**
     * @test
     */
    public function it_blue_circle()
    {
        $blueCircle = new Circle(new BleuCircle(), 0, 0, 10.5);

        $this->assertEquals("CIRCLE: BLUE", $blueCircle->draw());
    }

    /**
     * @test
     */
    public function it_red_circle()
    {
        $redCircle = new Circle(new RedCircle(), 0, 0, 10.5);

        $this->assertEquals("CIRCLE: RED", $redCircle->draw());
    }
}
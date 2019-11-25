<?php


namespace Tests\Unit;


use App\Structural\Flyweight\ShapeFactory;
use phpDocumentor\Reflection\Types\Self_;
use PHPUnit\Framework\TestCase;

class FlyWeightTest extends TestCase
{

    private static $colors = ["Red", "Green", "Blue", "White", "Black"];


    /**
     * @test
     */
    public function it_spry_object()
    {
        for ($i = 0; $i < 100; ++$i) {

            $circle = ShapeFactory::getShape($this->getRandomColor());
            $circle->setI($this->getRandomCoordination());
            $circle->setJ($this->getRandomCoordination());
            $circle->setRadius(100);
//            $circle->draw();
        }

        $this->assertLessThanOrEqual(count(self::$colors), ShapeFactory::size());

    }

    private function getRandomColor(): string
    {
        $index = rand(0, 4);
        return self::$colors[$index];
    }

    public function getRandomCoordination(): int
    {
        return rand(0, 100);
    }
}
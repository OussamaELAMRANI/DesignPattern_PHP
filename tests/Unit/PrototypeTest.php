<?php


namespace Tests\Unit;


use App\_Prototype\Forms\Circle;
use App\_Prototype\Forms\Shape;
use App\_Prototype\Forms\Square;
use App\_Prototype\ShapeCache;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{


    /**
     * Prototype pattern:
     *
     * refers to creating duplicate object
     * while keeping performance in mind.
     *
     * @test
     */
    public function it_cloned()
    {
        ShapeCache::loadCache();

        $circle1 = ShapeCache::getShape('circle_1');
        $circle2 = ShapeCache::getShape('circle_1');

        $square1 = ShapeCache::getShape('square_1');
        $square2 = ShapeCache::getShape('square_1');


        $this->assertEquals($circle2->getType(), $circle1->getType());
        $this->assertEquals($square1->getType(), $square2->getType());


        $instance1 = spl_object_hash($circle1);
        $instance2 = spl_object_hash($circle2);

        $this->assertNotEquals($instance1, $instance2);
    }
}

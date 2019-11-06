<?php

namespace Tests\unit;

use App\_Factory\ShapeFactory;

use PHPUnit\Framework\TestCase;
use App\_Singleton\SingleClass;

class SingletonTest extends TestCase
{

    /**
     * @test
     */
    public function it_a_single_class_identified_by_hash_class()
    {
        $self1 = SingleClass::getInstance();
        $self2 = SingleClass::getInstance();

        $instance1 = spl_object_hash($self1);
        $instance2 = spl_object_hash($self2);

        $this->assertEquals($instance1, $instance2);

    }
}

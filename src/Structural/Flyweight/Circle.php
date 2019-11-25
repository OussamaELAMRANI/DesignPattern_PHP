<?php


namespace App\Structural\Flyweight;


class Circle implements Shape
{
    /**
     * @var integer
     */
    private $i, $j, $radius;
    /**
     * @var string
     */
    private $color;

    /**
     * Circle constructor.
     * @param int $i
     * @param int $j
     * @param int $radius
     * @param string $color
     */
    public function __construct(int $i, int $j, int $radius, string $color)
    {
        $this->i = $i;
        $this->j = $j;
        $this->radius = $radius;
        $this->color = $color;
    }


    public function draw()
    {
        printf("Circle %s, X: %d | Y: %d and Radius: %d \n", $this->color, $this->i, $this->j, $this->radius);
        printf("---------------------------------------------- \n");
    }

    /**
     * @param int $j
     */
    public function setJ(int $j): void
    {
        $this->j = $j;
    }

    /**
     * @param int $i
     */
    public function setI(int $i): void
    {
        $this->i = $i;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}
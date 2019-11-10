<?php


namespace App\_Prototype\Forms;



abstract class Shape
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    protected $type;

    abstract public function draw();


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


    abstract function __clone();

}
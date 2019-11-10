<?php


namespace App\Structural\Filter;


class Person
{
    protected $name;
    protected $gender;
    protected $status;

    /**
     * Person constructor.
     * @param $name
     * @param $gender
     */
    public function __construct($name, $gender, string $status = 'SINGLE')
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->status = $status;
    }


    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

}
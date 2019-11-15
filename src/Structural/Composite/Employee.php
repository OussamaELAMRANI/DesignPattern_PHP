<?php


namespace App\Structural\Composite;


use Illuminate\Support\Collection;

class Employee
{
    private $id;
    private $name;
    private $dep;
    private $salary;
    private $subordinates;

    /**
     * Employee constructor.
     *
     * @param $name
     * @param $dep
     * @param $salary
     */
    public function __construct(string $name, string $dep, float $salary)
    {
        $this->id = str_replace(' ', '_', substr(str_shuffle($name . $dep . $salary), 0, 6));
        $this->name = $name;
        $this->dep = $dep;
        $this->salary = $salary;
        $this->subordinates = collect([]);
    }

    /**
     * Add New Subordinate
     *
     * @param Employee $employee
     * @return $this
     */
    public function add(Employee $employee): self
    {
        $this->subordinates->add($employee);

        return $this;
    }

    /**
     * List all Subordinates
     *
     * @return Collection
     */
    public function getSubordinates(): Collection
    {
        return $this->subordinates->all();
    }

    public function countSubordinates(): int
    {
        return $this->subordinates->count();
    }

    public function remove(Employee $employee)
    {
        $this->subordinates = $this->subordinates->reject(function ($e) use ($employee) {
            if ($e->id == $employee->id) return $e;
        });
    }

    public function getEmployee($id): Employee
    {
        $employees = $this->subordinates->all();
        $simple = null;

        foreach ($employees as $employee) {
            if ($employee->id == $id){
                $simple = $employee;
                break 1;
            }
        }

        return $simple;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
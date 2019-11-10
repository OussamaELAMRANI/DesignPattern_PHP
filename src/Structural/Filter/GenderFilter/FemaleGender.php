<?php


namespace App\Structural\Filter\GenderFilter;


use App\Structural\Filter\Criteria;
use App\Structural\Filter\Person;
use Illuminate\Support\Collection;

class FemaleGender implements Criteria
{
    private $people;

    public function meetCriteria(Collection $people): Collection
    {
        $females = $people->filter(function ($p) {
            return ($p->getGender() == "F");
        });

        return $females;
    }

    /**
     * @return mixed
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * @param mixed $people
     */
    public function setPeople($people): void
    {
        $this->people = $people;
    }
}
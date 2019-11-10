<?php


namespace App\Structural\Filter\GenderFilter;


use App\Structural\Filter\Criteria;
use App\Structural\Filter\Person;
use Illuminate\Support\Collection;

class MaleGander implements Criteria
{
    private $people;

    public function meetCriteria(Collection $people): Collection
    {
        $peoples = collect($people);

        $male = $peoples->filter(function ($p) {
            return $p->getGender() == "M";
        });
        $this->setPeople($male);
        return $male;
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
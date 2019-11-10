<?php


namespace App\Structural\Filter\GenderFilter;


use App\Structural\Filter\Criteria;
use App\Structural\Filter\Person;
use Illuminate\Support\Collection;

class Single implements Criteria
{

    public function meetCriteria(Collection $people): Collection
    {
        $single = $people->filter(function ($p) {
            return ($p->getStatus() == "SINGLE");
        });

        return $single;
    }

}
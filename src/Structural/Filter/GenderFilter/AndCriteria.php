<?php


namespace App\Structural\Filter\GenderFilter;


use App\Structural\Filter\Criteria;
use Illuminate\Support\Collection;

class AndCriteria implements Criteria
{
    private $criteria1;
    private $criteria2;

    public function __construct(Criteria $criteria1, Criteria $criteria2)
    {
        $this->criteria1 = $criteria1;
        $this->criteria2 = $criteria2;
    }

    public function meetCriteria(Collection $people): Collection
    {
        $fst = $this->criteria1->meetCriteria($people);

        return $this->criteria2->meetCriteria($fst);
    }
}
<?php


namespace App\Structural\Filter;



use Illuminate\Support\Collection;

interface Criteria
{
    public function meetCriteria(Collection $people): Collection;
}
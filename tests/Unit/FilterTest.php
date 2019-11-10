<?php


namespace Tests\Unit;


use App\Structural\Filter\GenderFilter\AndCriteria;
use App\Structural\Filter\GenderFilter\FemaleGender;
use App\Structural\Filter\GenderFilter\MaleGander;
use App\Structural\Filter\GenderFilter\Single;
use App\Structural\Filter\Person;
use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase
{

    /**
     * @test
     */
    public function it_a_list_of_titiz()
    {
        $titiz = (new FemaleGender())
            ->meetCriteria(
                collect([
                    new Person('oussama', 'M'),
                    new Person('Fatiha', 'F'),
                    new Person('Khadija', 'F'),
                    new Person('Salma', 'F'),
                    new Person('Med', 'M')
                ])
            );

//        var_dump($titiz);
        $this->assertCount(3, $titiz);
    }

    /**
     * @test
     */
    public function it_a_list_of_men()
    {
        $men = (new MaleGander())
            ->meetCriteria(
                collect([new Person('oussama', 'M'),
                    new Person('Fatiha', 'F'),
                    new Person('Khadija', 'F'),
                    new Person('Salma', 'F'),
                    new Person('Med', 'M', "DIVORCED")])
            );


//        var_dump($men);
        $this->assertCount(2, $men);
    }

    /**
     * @test
     */
    public function it_a_singles_men()
    {
        $peoples = collect([
            new Person('oussama', 'M'),
            new Person('Ahmed', 'M', "MARRIED"),
            new Person('Fatiha', 'F'),
            new Person('Khadija', 'F'),
            new Person('Salma', 'F'),
            new Person('Med', 'M', "DIVORCED"),

            new Person('Pikatcho', 'Pokemon')
        ]);

        $men = new MaleGander();
        $men->meetCriteria($peoples);
        $single = (new Single());

        $mix = new AndCriteria($men, $single);


        $this->assertCount(1, $mix->meetCriteria($peoples));
    }


}
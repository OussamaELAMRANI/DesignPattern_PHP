<?php


namespace Tests\Unit;


use App\Structural\Composite\Employee;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{

    public function getSimpleEmployee(): Employee
    {
        $faker = Factory::create('EN');

        $employee = new Employee(
            $faker->name,
            $faker->streetName,
            $faker->numberBetween(3000, 10000)
        );

        return $employee;
    }

    /**
     * Like a Tree has many Leafs (Nodes)
     *
     * @test
     */
    public function it_is_a_chef_with_3_subordinates()
    {
        $chef = new Employee("Oussama ELAMRANI", "IT", 20000);

        $simple = $this->getSimpleEmployee();
        $simple2 = $this->getSimpleEmployee();

        $simple2->add($this->getSimpleEmployee());
        $simple2->add($this->getSimpleEmployee());

        $chef->add($this->getSimpleEmployee());
        $chef->add($simple);
        $chef->add($simple2);

        // Chef Has 3
        $this->assertEquals(3, $chef->countSubordinates());

        # simple 2 has 2 sub
        $this->assertEquals(2, $simple2->countSubordinates());
        $this->assertEquals(2,
            $chef->getEmployee($simple2->getId())
                ->countSubordinates()
        );

        # simple has 0
        $this->assertEquals(0,
            $chef->getEmployee($simple->getId())
                ->countSubordinates()
        );
        $this->assertEquals(0, $simple->countSubordinates());

        // Chef
        //   |
        //  |---------|--------|
        //  |         |       |
        // Simple  simple2   simple0
        //   |      |           |
        //   0      2           0
        //  |        |           |
        //  |        |           |
        //  x      S1 S2         x
        //  |        |           |
        //  |        |           |
        // -         0           -
    }
}
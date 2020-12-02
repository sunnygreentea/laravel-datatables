<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i<=100; $i++) {
                       
            $employee = Employee::create([
                'id'                => $i,
                'name'              => $faker->name,
                'email'				=> $faker->email,
                'phone'				=> $faker->phoneNumber,
                'salary'			=> $faker->numberBetween(20000,40000),
                'department'		=> $faker->randomElement(array('Accounting', 'Marketing', 'Sales', 'Quality', 'Management')),
            ]);

        }
    }
}

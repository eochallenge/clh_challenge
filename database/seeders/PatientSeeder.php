<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();

        //create a user
        for($i=0;$i<=50000;$i++){
            Patient::create(
                [
                    'first_name' => $this->faker->firstName(),
                    'last_name' => $this->faker->lastName(),
                ]
            );
        }

    }
}

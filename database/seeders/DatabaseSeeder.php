<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Generator;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Provider\en_US\Person;
use Faker\Provider\en_US\Address;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();
        // for ($i = 0; $i < 15; $i++) {
        //     Student::create([
        //         'firstname' => 'abd',
        //         'lastname' => 'jim',
        //         'middlename' => 'qw',
        //         'date_of_birth' => 'lest',
        //         'state_of_origin' => 'lest',
        //         'nationality' => 'lest',
        //         'home_address' => 'lest'
        //     ]);
        // }
    }
}

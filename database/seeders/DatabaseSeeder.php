<?php

namespace Database\Seeders;

use App\Models\Autorities;
use App\Models\Student;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $feature = [Autorities::STUDENT, Autorities::TEACHER, Autorities::GUARDIAN];
        // \App\Models\User::factory(10)->create();
        // for ($i = 1; $i <= 14; $i++) {
        //     Autorities::create([
        //         'user_id' => $i,
        //         'feature' => $faker->randomElement($feature),
        //         'viewAny' => $faker->numberBetween(0, 1),
        //         'view' => $faker->numberBetween(0, 1),
        //         'create' => $faker->numberBetween(0, 1),
        //         'update' => $faker->numberBetween(0, 1),
        //         'delete' => $faker->numberBetween(0, 1)
        //     ]);
        // }

        // Student::create([
        //     'firstname' => 'Abdullahi',
        //     'lastname' => 'Jimoh',
        //     'middlename' => 'Temidayo',
        //     'date_of_birth' => now(),
        //     'state_of_origin' => 'Oyo',
        //     'nationality' => 'Nigeria',
        //     'home_address' => '24, Amina Way'
        // ]);
    }
}

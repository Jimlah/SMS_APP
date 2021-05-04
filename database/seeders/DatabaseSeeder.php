<?php

namespace Database\Seeders;

use App\Models\Autorities;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
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

        for ($i=0; $i < 10; $i++) { 
            User::create([
                'username' => $faker->userName(),
                'email' => $faker->unique()->email(),
                'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"
            ]);
        }

        for ($i = 0; $i < 100; $i++) {
            # code...
            Student::create([
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'middlename' => $faker->firstName(),
                'date_of_birth' => $faker->date(),
                'state_of_origin' => $faker->state,
                'nationality' => $faker->country,
                'home_address' => $faker->streetAddress
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            # code...
            Teacher::create([
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'middlename' => $faker->firstName(),
                'date_of_birth' => $faker->date(),
                'phone_number' => $faker->phoneNumber
            ]);
        }
    }
}

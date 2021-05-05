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

        User::create([
            'username' => 'Zero',
            'email' => 'abdullahij951@gmail.com',
            'password' => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
            'email_verified_at' => now(),
            'roles' => User::ROLE_SUPER_ADMIN
        ]);
    }
}

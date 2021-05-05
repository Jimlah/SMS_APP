<?php

namespace Database\Factories;

use App\Models\Student;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            'firstname' => $faker->firstName(),
            'lastname' => $faker->lastName(),
            'middlename' => $faker->firstName(),
            'email' => $faker->email(),
            'date_of_birth' => $faker->date(),
            'state_of_origin' => $faker->state,
            'nationality' => $faker->country,
            'home_address' => $faker->streetAddress
        ];
    }
}

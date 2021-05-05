<?php

namespace Database\Factories;

use App\Models\Teacher;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

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
            'email' => $faker->unique()->email(),
            'date_of_birth' => $faker->date(),
            'phone_number' => $faker->phoneNumber()
        ];
    }
}

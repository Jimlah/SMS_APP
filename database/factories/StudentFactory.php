<?php

namespace Database\Factories;

use App\Models\Student;
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
        return [
            'firstname' => 'Abdullahi',
            'lastname' => 'Jimoh',
            'middlename' => 'Temidayo',
            'date_of_birth' => now(),
            'state_of_origin' => 'Oyo',
            'nationality' => 'Nigeria',
            'home_address' => '24, Amina Way'
        ];
    }
}

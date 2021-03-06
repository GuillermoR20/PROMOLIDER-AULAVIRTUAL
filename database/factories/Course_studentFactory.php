<?php

namespace Database\Factories;

use App\Models\Course_student;
use Illuminate\Database\Eloquent\Factories\Factory;

class Course_studentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course_student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_course' => $this->faker->numberBetween(1,5),
            'id_students' => $this->faker->numberBetween(1,5),
        ];
    }
}

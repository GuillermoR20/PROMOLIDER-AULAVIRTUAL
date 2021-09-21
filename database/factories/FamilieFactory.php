<?php

namespace Database\Factories;

use App\Models\Familie;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Familie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'PHP',
        ];
    }
}

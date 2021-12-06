<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Step;

class StepFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Step::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'code' => $this->faker->word,
            'description' => $this->faker->text,
            'equipment_hours' => $this->faker->boolean,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

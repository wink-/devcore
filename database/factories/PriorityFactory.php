<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Priority;

class PriorityFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Priority::class;

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
            'turn_around_days' => $this->faker->randomNumber(),
            'image_key' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

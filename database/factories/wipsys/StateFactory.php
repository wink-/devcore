<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\State;

class StateFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = State::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'code' => $this->faker->word,
            'name' => $this->faker->name,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

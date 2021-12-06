<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Tag;

class TagFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Tag::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'number' => $this->faker->randomNumber(),
            'work_order_number' => $this->faker->randomNumber(),
            'quantity' => $this->faker->randomFloat(),
            'quantity_shipped' => $this->faker->randomFloat(),
            'shipped' => $this->faker->boolean,
            'date_received' => $this->faker->dateTime(),
            'note' => $this->faker->sentence,
            'ordinal' => $this->faker->randomNumber(),
            'container' => $this->faker->word,
            'printed' => $this->faker->boolean,
            'session_id' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

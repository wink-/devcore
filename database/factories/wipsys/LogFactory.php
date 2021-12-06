<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Log;

class LogFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Log::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'session_id' => $this->faker->word,
            'key_strokes' => $this->faker->text,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

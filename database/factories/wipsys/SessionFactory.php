<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Session;

class SessionFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Session::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'session_id' => $this->faker->word,
            'jwt' => $this->faker->text,
            'active' => $this->faker->boolean,
            'key_strokes' => $this->faker->text,
            'user_id' => $this->faker->word,
            'user_code' => $this->faker->word,
            'user' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

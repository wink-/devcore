<?php

namespace Database\Factories\Calsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Calsys\Type;

class TypeFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Type::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'procLink' => $this->faker->word,
        ];
    }
}

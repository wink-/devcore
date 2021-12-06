<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Equipment;

class EquipmentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Equipment::class;

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
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

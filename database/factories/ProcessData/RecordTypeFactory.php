<?php

namespace Database\Factories\ProcessData;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProcessData\RecordType;

class RecordTypeFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = RecordType::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
        ];
    }
}

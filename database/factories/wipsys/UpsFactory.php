<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Ups;

class UpsFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Ups::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'tracking_number' => $this->faker->word,
            'receiver_name' => $this->faker->word,
            'shipment_process_timestamp' => $this->faker->word,
            'service_type' => $this->faker->word,
            'weight' => $this->faker->randomFloat(),
            'ref_1' => $this->faker->word,
            'ref_2' => $this->faker->word,
            'ref_3' => $this->faker->word,
            'ref_4' => $this->faker->word,
            'ref_5' => $this->faker->word,
            'revision' => $this->faker->randomNumber(),
            'archive' => $this->faker->boolean,
        ];
    }
}

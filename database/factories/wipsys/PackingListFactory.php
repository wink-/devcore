<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\PackingList;

class PackingListFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = PackingList::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'number' => $this->faker->randomNumber(),
            'date' => $this->faker->dateTime(),
            'employee_code' => $this->faker->word,
            'user_code' => $this->faker->word,
            'customer_code' => $this->faker->word,
            'destination_code' => $this->faker->word,
            'carrier_code' => $this->faker->word,
            'freight_code' => $this->faker->word,
            'customer_purchase_order' => $this->faker->word,
            'cod' => $this->faker->boolean,
            'date_received' => $this->faker->dateTime(),
            'printed' => $this->faker->boolean,
            'session_id' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\PackingListsDetail;

class PackingListsDetailFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = PackingListsDetail::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'packing_list_number' => $this->faker->randomNumber(),
            'tag_number' => $this->faker->randomNumber(),
            'work_order_number' => $this->faker->randomNumber(),
            'part_id' => $this->faker->randomNumber(),
            'part_number' => $this->faker->word,
            'customer_code' => $this->faker->word,
            'destination_code' => $this->faker->word,
            'process_code' => $this->faker->word,
            'method_code' => $this->faker->word,
            'customer_packing_list' => $this->faker->word,
            'customer_purchase_order' => $this->faker->word,
            'certification_number' => $this->faker->randomNumber(),
            'certify' => $this->faker->boolean,
            'tag_quantity' => $this->faker->randomFloat(),
            'tag_quantity_shipped' => $this->faker->randomFloat(),
            'quantity' => $this->faker->randomFloat(),
            'shipped_amount' => $this->faker->randomFloat(),
            'packing_list_date' => $this->faker->dateTime(),
            'date_received' => $this->faker->dateTime(),
            'session_id' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Workorder;

class WorkorderFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Workorder::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'customer_code' => $this->faker->word,
            'part_id' => \App\Models\Wipsys\Part::factory(),
            'part_number' => $this->faker->word,
            'process_code' => $this->faker->word,
            'price' => $this->faker->randomFloat(),
            'price_code' => $this->faker->word,
            'date_received' => $this->faker->dateTime(),
            'date_required' => $this->faker->dateTime(),
            'customer_purchase_order' => $this->faker->word,
            'customer_packing_list' => $this->faker->word,
            'quantity' => $this->faker->randomFloat(),
            'unit_code' => $this->faker->word,
            'quantity_shipped' => $this->faker->randomFloat(),
            'our_last_packing_list' => $this->faker->randomNumber(),
            'destination_code' => $this->faker->word,
            'carrier_code' => $this->faker->word,
            'freight_code' => $this->faker->word,
            'date_shipped' => $this->faker->dateTime(),
            'shipped_amount' => $this->faker->randomFloat(),
            'inventory_amount' => $this->faker->randomFloat(),
            'invoice_number' => $this->faker->randomNumber(),
            'invoice_date' => $this->faker->dateTime(),
            'invoice_amount' => $this->faker->randomFloat(),
            'priority' => $this->faker->randomNumber(),
            'rework' => $this->faker->boolean,
            'hot' => $this->faker->boolean,
            'started' => $this->faker->boolean,
            'completed' => $this->faker->boolean,
            'shipped' => $this->faker->boolean,
            'cod' => $this->faker->boolean,
            'invoiced' => $this->faker->boolean,
            'note' => $this->faker->sentence,
            'id' => $this->faker->randomNumber(),
            'printed' => $this->faker->boolean,
            'image_count' => $this->faker->randomNumber(),
            'session_id' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
            'code' => \App\Models\Wipsys\Customer::factory(),
        ];
    }
}

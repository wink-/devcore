<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Workorderhistory;

class WorkorderhistoryFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Workorderhistory::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'number' => $this->faker->randomNumber(),
            'customer_code' => $this->faker->word,
            'customer_name' => $this->faker->word,
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
            'STEPNAME1' => $this->faker->word,
            'TMANHRS1' => $this->faker->randomFloat(),
            'TOTHOURS1' => $this->faker->randomFloat(),
            'STEPNAME2' => $this->faker->word,
            'TMANHRS2' => $this->faker->randomFloat(),
            'TOTHOURS2' => $this->faker->randomFloat(),
            'STEPNAME3' => $this->faker->word,
            'TMANHRS3' => $this->faker->randomFloat(),
            'TOTHOURS3' => $this->faker->randomFloat(),
            'image_count' => $this->faker->randomNumber(),
            'session_id' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

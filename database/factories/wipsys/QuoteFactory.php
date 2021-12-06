<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Quote;

class QuoteFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Quote::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'customer_id' => \App\Models\Wipsys\Customer::factory(),
            'customer_code' => $this->faker->word,
            'customer_name' => $this->faker->word,
            'contact_id' => \App\Models\Wipsys\Contact::factory(),
            'customer_rfq' => $this->faker->word,
            'part_id' => $this->faker->randomNumber(),
            'part_number' => $this->faker->word,
            'revision_code' => $this->faker->word,
            'part_description' => $this->faker->word,
            'specification' => $this->faker->word,
            'material' => $this->faker->word,
            'process_id' => \App\Models\Wipsys\Process::factory(),
            'process_code' => $this->faker->word,
            'process_old' => $this->faker->word,
            'method_code' => $this->faker->word,
            'method' => $this->faker->word,
            'quantity_minimum' => $this->faker->word,
            'quantity_maximum' => $this->faker->word,
            'unit_code' => $this->faker->word,
            'units' => $this->faker->word,
            'quantity1' => $this->faker->word,
            'price' => $this->faker->randomFloat(),
            'price_code' => $this->faker->word,
            'minimum_lot_charge' => $this->faker->randomFloat(),
            'quantity_price_break' => $this->faker->randomNumber(),
            'price_break' => $this->faker->randomFloat(),
            'weight' => $this->faker->randomFloat(),
            'weight_unit_code' => $this->faker->word,
            'surface_area' => $this->faker->word,
            'surface_area_unit_code' => $this->faker->word,
            'thickness_minimum' => $this->faker->word,
            'thickness_maximum' => $this->faker->word,
            'thickness_unit_code' => $this->faker->word,
            'notes' => $this->faker->text,
            'comments' => $this->faker->text,
            'quotedBy' => $this->faker->word,
            'baking' => $this->faker->boolean,
            'baking_time_pre' => $this->faker->word,
            'baking_temp_pre' => $this->faker->word,
            'baking_time_post' => $this->faker->word,
            'baking_temp_post' => $this->faker->word,
            'bake_notes' => $this->faker->text,
            'blasting' => $this->faker->boolean,
            'blast_notes' => $this->faker->text,
            'masking' => $this->faker->boolean,
            'mask_notes' => $this->faker->text,
            'testing' => $this->faker->boolean,
            'test_notes' => $this->faker->text,
            'user_id' => \App\Models\User::factory(),
            'user_code' => $this->faker->word,
            'emails' => $this->faker->text,
            'email_print' => $this->faker->boolean,
            'print' => $this->faker->word,
            'value_min' => $this->faker->randomFloat(),
            'value_max' => $this->faker->randomFloat(),
            'image_count' => $this->faker->randomNumber(),
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
            'session_id' => $this->faker->word,
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}

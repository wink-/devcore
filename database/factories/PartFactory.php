<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Part;

class PartFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Part::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'number' => $this->faker->word,
            'revision_code' => $this->faker->word,
            'description' => $this->faker->text,
            'customer_code' => $this->faker->word,
            'customer_name' => $this->faker->word,
            'process_code' => $this->faker->word,
            'method_code' => $this->faker->word,
            'price' => $this->faker->randomFloat(),
            'price_code' => $this->faker->word,
            'price_break' => $this->faker->randomFloat(),
            'quantity_price_break' => $this->faker->randomFloat(),
            'unit_code' => $this->faker->word,
            'minimum_lot_charge' => $this->faker->randomFloat(),
            'minimum_line_charge' => $this->faker->randomFloat(),
            'quote_id' => $this->faker->randomNumber(),
            'certify' => $this->faker->boolean,
            'specification' => $this->faker->word,
            'bake' => $this->faker->boolean,
            'baking_time_pre' => $this->faker->word,
            'baking_temp_pre' => $this->faker->word,
            'baking_time_post' => $this->faker->word,
            'baking_temp_post' => $this->faker->word,
            'procedure_code' => $this->faker->word,
            'material' => $this->faker->word,
            'material_name' => $this->faker->word,
            'material_condition' => $this->faker->word,
            'thickness_minimum' => $this->faker->randomFloat(),
            'thickness_maximum' => $this->faker->randomFloat(),
            'thickness_unit_code' => $this->faker->word,
            'surface_area' => $this->faker->randomFloat(),
            'surface_area_unit_code' => $this->faker->word,
            'weight' => $this->faker->randomFloat(),
            'weight_unit_code' => $this->faker->word,
            'length' => $this->faker->randomFloat(),
            'width' => $this->faker->randomFloat(),
            'height' => $this->faker->randomFloat(),
            'dimension_unit_code' => $this->faker->word,
            'material_thickness' => $this->faker->randomFloat(),
            'material_thickness_unit_code' => $this->faker->word,
            'note' => $this->faker->sentence,
            'special_requirement' => $this->faker->text,
            'operator_note' => $this->faker->text,
            'quality_check_1' => $this->faker->randomNumber(),
            'quality_check_2' => $this->faker->randomNumber(),
            'quality_check_3' => $this->faker->randomNumber(),
            'quality_check_4' => $this->faker->randomNumber(),
            'quality_check_5' => $this->faker->randomNumber(),
            'quality_check_6' => $this->faker->randomNumber(),
            'image_count' => $this->faker->randomNumber(),
            'session_id' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

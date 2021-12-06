<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Invoice;

class InvoiceFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Invoice::class;

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
            'customer_purchase_order' => $this->faker->word,
            'date' => $this->faker->dateTime(),
            'note' => $this->faker->sentence,
            'emails' => $this->faker->text,
            'printed' => $this->faker->boolean,
            'session_id' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Carrier;

class CarrierFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Carrier::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'code' => $this->faker->word,
            'name' => $this->faker->name,
            'physical_address' => $this->faker->word,
            'address_extension' => $this->faker->word,
            'payment_address' => $this->faker->word,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip' => $this->faker->postcode,
            'email' => $this->faker->safeEmail,
            'company_phone' => $this->faker->word,
            'fax' => $this->faker->word,
            'note' => $this->faker->sentence,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

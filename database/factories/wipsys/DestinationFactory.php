<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Destination;

class DestinationFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Destination::class;

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
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip' => $this->faker->postcode,
            'customer_code' => $this->faker->word,
            'CONTACT1' => $this->faker->word,
            'company_phone' => $this->faker->word,
            'PHONE1' => $this->faker->word,
            'EXTENSION1' => $this->faker->word,
            'CONTACT2' => $this->faker->word,
            'PHONE2' => $this->faker->word,
            'EXTENSION2' => $this->faker->word,
            'fax' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'note' => $this->faker->sentence,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
            'customer_code_id' => \App\Models\Wipsys\Customer::factory(),
        ];
    }
}

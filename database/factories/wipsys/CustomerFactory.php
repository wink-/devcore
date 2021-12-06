<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Customer;

class CustomerFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Customer::class;

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
            'destination_code' => $this->faker->word,
            'packing_list_copies' => $this->faker->randomNumber(),
            'carrier_id' => $this->faker->randomNumber(),
            'carrier_code' => $this->faker->word,
            'CONTACT1' => $this->faker->word,
            'company_phone' => $this->faker->word,
            'EXTENSION1' => $this->faker->word,
            'CONTACT2' => $this->faker->word,
            'PHONE2' => $this->faker->word,
            'EXTENSION2' => $this->faker->word,
            'fax' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'invoice_emails' => $this->faker->text,
            'cod' => $this->faker->boolean,
            'minimum_line_charge_by_order' => $this->faker->boolean,
            'minimum_line_charge_by_day' => $this->faker->boolean,
            'tax_id' => $this->faker->word,
            'note' => $this->faker->sentence,
            'billing_address' => $this->faker->word,
            'billing_city' => $this->faker->word,
            'billing_state' => $this->faker->word,
            'billing_zip' => $this->faker->word,
            'billing_phone' => $this->faker->word,
            'billing_fax' => $this->faker->word,
            'billing_email' => $this->faker->word,
            'ship_to_address_id' => $this->faker->randomNumber(),
            'ship_to_address_code' => $this->faker->word,
            'ship_to_address' => $this->faker->word,
            'ship_to_city' => $this->faker->word,
            'ship_to_state' => $this->faker->word,
            'ship_to_zip' => $this->faker->word,
            'ship_to_phone' => $this->faker->word,
            'ship_to_fax' => $this->faker->word,
            'ship_to_email' => $this->faker->word,
            'deleted_at' => $this->faker->dateTime(),
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

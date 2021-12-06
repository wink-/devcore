<?php

namespace Database\Factories\Wipsys;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wipsys\Contact;

class ContactFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Contact::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'customer_code' => $this->faker->word,
            'customer_id' => \App\Models\Wipsys\Customer::factory(),
            'customer_name' => $this->faker->word,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'extension' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'quote_emails' => $this->faker->text,
            'email_quote_print' => $this->faker->boolean,
            'cell' => $this->faker->word,
            'fax' => $this->faker->word,
            'archive' => $this->faker->boolean,
            'revision' => $this->faker->randomNumber(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opportunity>
 */
class OpportunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'client_id' => Client::factory(),
            'tender_no' => $this->faker->sentence(),
            'tender_title' => $this->faker->sentence(),
            'tender_desc' => $this->faker->sentence(),
        ];

    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Http\Controllers\KlantController;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klant>
 */
class KlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('nl_NL'); // Nederlandse locale

        return [
            'klant_nummer' => fake()->unique()->numberBetween(1, 999999),
            'naam' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'straat_postcode' => fake()->streetAddress() . ' ' . fake()->postcode(),
            'plaats' => fake()->city(),
            
        ];
    }
}   

<?php

namespace Database\Factories;

use App\Models\Domain;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Domain>
 */
class DomainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $domain = fake()->domainWord();

        return [
            'name' => ucfirst($domain),
            'slug' => $domain,
            'icon' => 'emoji-angry',
            'secure' => false,
            'default' => false,
        ];
    }
}

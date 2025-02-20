<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artist;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vinyle>
 */
class VinyleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3), 
            'release_year' => fake()->year(), 
            'label' => fake()->company(),
            'artist_id' => Artist::factory()->create()->id, 
            'description' => implode("\n", fake()->paragraphs(3)), 
            'preview' => fake()->text(100), 
            'date_add' => fake()->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vinyle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commantaire>
 */
class CommantaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "cotent"=>fake()->text(50),
            "user_id"=>User::factory(),
            "vinyle_id"=>Vinyle::factory(),
        ];
    }
}

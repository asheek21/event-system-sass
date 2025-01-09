<?php

namespace Database\Factories;

use App\Enums\TalkType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Talk>
 */
class TalkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory() ,
            'title' => fake()->sentence(),
            'length' => random_int(20,90),
            'abstract' => fake()->text(100),
            'organizer_notes' => fake()->text(100),
            'type' => fake()->randomElement(TalkType::cases())->value
        ];
    }
}

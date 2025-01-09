<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startsAt = Carbon::now()->addMonths(rand(5,11));
        $endsAt = $startsAt->clone()->addDays(rand(1,5));

        $cfpStartsAt = $startsAt->clone()->subMonth(3);
        $cfpEndsAt = $cfpStartsAt->clone()->addMonths(2) ;

        return [
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'location' => fake()->city(),
            'url' => fake()->url(),
            'start_date' => $startsAt,
            'end_date' => $endsAt,
            'cfp_start_date' => $cfpStartsAt,
            'cfp_end_date' => $cfpEndsAt
        ];
    }
}

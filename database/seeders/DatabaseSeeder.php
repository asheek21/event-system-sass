<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\Talk;
use App\Models\User;
use Database\Factories\ConferenceFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()
        ->has(Talk::factory()->count(3))
        ->create([
            'name' => 'asheek',
            'email' => 'asheek@gmail.com',
            'password' => 'password'
        ]);

        Conference::factory()->count(3)->create() ;
    }
}

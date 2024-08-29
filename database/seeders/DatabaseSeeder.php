<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Mario',
            'last_name' => 'Rossi',
            'email' => 'test@example.com',
        ]);

        \App\Models\User::factory(4)->create();

        $this->call([TripSeeder::class, StopSeeder::class]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trip = Trip::first();

        $days = [
            [
                'number' => '1',
                'title' => 'Departure from Italy',
                'description' => 'Ready for this new and exciting adventure? Let\'s go!',
                'date' => '2024-10-12',
            ],
            [
                'number' => '2',
                'title' => 'Arrival in Bangkok',
                'description' => 'Free evening and dinner',
                'date' => '2024-10-13',
            ],
            [
                'number' => '3',
                'title' => 'Day of temples and markets',
                'description' => 'Between giant Buddhas and emerald Buddha',
                'date' => '2024-10-14',
            ],
        ];

        foreach ($days as $day) {
            $new_day = new Day();
            $new_day->trip_id = $trip->id;
            $new_day->fill($day);
            $new_day->save();
        }
    }
}

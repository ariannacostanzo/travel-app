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

        $day = [
            'title' => 'Giorno di prova',
            'date' => '2024-10-12'
        ];

        $new_day = new Day();
        $new_day->trip_id = $trip['id'];
        $new_day->fill($day);
        $new_day->save();
    }
}

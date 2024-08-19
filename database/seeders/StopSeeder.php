<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\Stop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $day = Day::first();

        $stop = [
            'title' => 'Fermata di prova',
            'image' => 'immagine',
            'foods' => 'carote, pannocchie, patate',
            'address' => 'via delle banane',
            'latitude' => 10.88888888,
            'longitude' => 10.888888889,
            'rating' => 5
        ];

        $new_stop = new Stop();
        $new_stop->day_id = $day['id'];
        $new_stop->fill($stop);
        $new_stop->save();
    }
}

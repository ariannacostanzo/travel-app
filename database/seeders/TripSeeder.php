<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::first();
        $trip = [
            'title' => 'Viaggio di prova',
            'departure_date' => '2024/10/10',
            'return_date' => '2024/10/20'
        ];
        $new_trip = new Trip();
        $new_trip->user_id = $user->id;
        $new_trip->fill($trip);
        $new_trip->save();
    }
}

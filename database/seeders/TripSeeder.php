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

        $trips = [
            [
                'title' => 'Viaggio a Parigi',
                'departure_date' => '2024/09/15',
                'return_date' => '2024/09/22',
                'image_url' => 'https://example.com/images/parigi.jpg'
            ],
            [
                'title' => 'Safari in Kenya',
                'departure_date' => '2024/10/05',
                'return_date' => '2024/10/15',
                'image_url' => 'https://example.com/images/kenya.jpg'
            ],
            [
                'title' => 'Tour del Giappone',
                'departure_date' => '2025/03/20',
                'return_date' => '2025/04/05',
                'image_url' => 'https://example.com/images/giappone.jpg'
            ],
            [
                'title' => 'Crociera ai Caraibi',
                'departure_date' => '2024/12/01',
                'return_date' => '2024/12/10',
                'image_url' => 'https://example.com/images/caraibi.jpg'
            ],
            [
                'title' => 'Esplorazione in Islanda',
                'departure_date' => '2025/01/10',
                'return_date' => '2025/01/20',
                'image_url' => 'https://example.com/images/islanda.jpg'
            ],
            [
                'title' => 'Giro della Toscana',
                'departure_date' => '2024/11/01',
                'return_date' => '2024/11/08',
                'image_url' => 'https://example.com/images/toscana.jpg'
            ],
            [
                'title' => 'Weekend a Londra',
                'departure_date' => '2024/09/25',
                'return_date' => '2024/09/28',
                'image_url' => 'https://example.com/images/londra.jpg'
            ],
            [
                'title' => 'Visita a New York',
                'departure_date' => '2024/10/10',
                'return_date' => '2024/10/17',
                'image_url' => 'https://example.com/images/new_york.jpg'
            ],
            [
                'title' => 'Avventura in Australia',
                'departure_date' => '2025/02/01',
                'return_date' => '2025/02/14',
                'image_url' => 'https://example.com/images/australia.jpg'
            ],
            [
                'title' => 'Escursione in Nepal',
                'departure_date' => '2025/04/10',
                'return_date' => '2025/04/25',
                'image_url' => 'https://example.com/images/nepal.jpg'
            ],
            [
                'title' => 'Tour delle Alpi Svizzere',
                'departure_date' => '2024/12/20',
                'return_date' => '2024/12/30',
                'image_url' => 'https://example.com/images/alpi_svizzere.jpg'
            ],
            [
                'title' => 'Vacanza in Thailandia',
                'departure_date' => '2024/11/15',
                'return_date' => '2024/11/30',
                'image_url' => 'https://example.com/images/thailandia.jpg'
            ],
            [
                'title' => 'Esplorazione del Sahara',
                'departure_date' => '2024/10/20',
                'return_date' => '2024/10/30',
                'image_url' => 'https://example.com/images/sahara.jpg'
            ],
            [
                'title' => 'Viaggio in Patagonia',
                'departure_date' => '2025/01/15',
                'return_date' => '2025/01/30',
                'image_url' => 'https://example.com/images/patagonia.jpg'
            ],
            [
                'title' => 'Visita alle Piramidi in Egitto',
                'departure_date' => '2024/09/05',
                'return_date' => '2024/09/15',
                'image_url' => 'https://example.com/images/egitto.jpg'
            ],
            [
                'title' => 'Scoperta di Machu Picchu',
                'departure_date' => '2024/12/01',
                'return_date' => '2024/12/10',
                'image_url' => 'https://example.com/images/machu_picchu.jpg'
            ],
            [
                'title' => 'Relax alle Maldive',
                'departure_date' => '2025/02/20',
                'return_date' => '2025/03/01',
                'image_url' => 'https://example.com/images/maldive.jpg'
            ],
            [
                'title' => 'Tour dell\'India',
                'departure_date' => '2024/11/10',
                'return_date' => '2024/11/25',
                'image_url' => 'https://example.com/images/india.jpg'
            ],
            [
                'title' => 'Escursione nel Grand Canyon',
                'departure_date' => '2024/10/01',
                'return_date' => '2024/10/07',
                'image_url' => 'https://example.com/images/grand_canyon.jpg'
            ],
            [
                'title' => 'Esplorazione delle Galápagos',
                'departure_date' => '2025/03/10',
                'return_date' => '2025/03/20',
                'image_url' => 'https://example.com/images/galapagos.jpg'
            ]
        ];

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

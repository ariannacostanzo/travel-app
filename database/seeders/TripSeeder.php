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
                'image_url' => 'https://www.caldana.it/files/blog/image/curiosita_su_parigi_tour.jpg'
            ],
            [
                'title' => 'Safari in Kenya',
                'departure_date' => '2024/10/05',
                'return_date' => '2024/10/15',
                'image_url' => 'https://www.kanaloa.it/wp-content/uploads/2019/05/kanaloa-viaggi-liberta-kenya-safari-10.jpg'
            ],
            [
                'title' => 'Tour del Giappone',
                'departure_date' => '2025/03/20',
                'return_date' => '2025/04/05',
                'image_url' => 'https://www.aretinatours.com/media/k2/items/cache/giappa_L.jpg'
            ],
            [
                'title' => 'Crociera ai Caraibi',
                'departure_date' => '2024/12/01',
                'return_date' => '2024/12/10',
                'image_url' => 'https://st.ilfattoquotidiano.it/wp-content/uploads/2023/09/22/shutterstock_1938868960.jpg'
            ],
            [
                'title' => 'Esplorazione in Islanda',
                'departure_date' => '2025/01/10',
                'return_date' => '2025/01/20',
                'image_url' => 'https://media-assets.vanityfair.it/photos/643ffdd6070ddb7f7d409be2/16:9/w_2560%2Cc_limit/DJI_0449_medium1600x1066.jpg'
            ],
            [
                'title' => 'Giro della Toscana',
                'departure_date' => '2024/11/01',
                'return_date' => '2024/11/08',
                'image_url' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2021/08/15_Castiglione_della_Pescaia_iStock-1-1080x721.jpg?v=1628095722'
            ],
            [
                'title' => 'Weekend a Londra',
                'departure_date' => '2024/09/25',
                'return_date' => '2024/09/28',
                'image_url' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2017/03/unnamed1.jpg?v=1490116447'
            ],
            [
                'title' => 'Visita a New York',
                'departure_date' => '2024/10/10',
                'return_date' => '2024/10/17',
                'image_url' => 'https://as1.ftcdn.net/v2/jpg/01/90/16/22/1000_F_190162235_kht4YkbpXqlBa2bnUB2qlWbvcZfH6t0g.jpg'
            ],
            [
                'title' => 'Avventura in Australia',
                'departure_date' => '2025/02/01',
                'return_date' => '2025/02/14',
                'image_url' => 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/474000/474772-Australia.jpg'
            ],
            [
                'title' => 'Escursione in Nepal',
                'departure_date' => '2025/04/10',
                'return_date' => '2025/04/25',
                'image_url' => 'https://images.lonelyplanetitalia.it/uploads/oQw2JUtmacEie9ZNVzAaLKWAeSUC6SnR.jpg?q=80&p=slider&s=4ddd79c0f09cc515493e3bacfc4b15d0'
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
                'image_url' => 'https://onelifeintravel.com/wp-content/uploads/2016/03/IMG_1921_Snapseed.jpg'
            ],
            [
                'title' => 'Esplorazione del Sahara',
                'departure_date' => '2024/10/20',
                'return_date' => '2024/10/30',
                'image_url' => 'https://travel.thewom.it/pictures/2019/10/30/sahara-1.jpeg'
            ],
            [
                'title' => 'Viaggio in Patagonia',
                'departure_date' => '2025/01/15',
                'return_date' => '2025/01/30',
                'image_url' => 'https://www.volverviaggi.it/wp-content/uploads/2020/09/photo-1493724798364-c4ca5e3f5fd3.jpg'
            ],
            [
                'title' => 'Visita alle Piramidi in Egitto',
                'departure_date' => '2024/09/05',
                'return_date' => '2024/09/15',
                'image_url' => 'https://www.archetravel.com/wp-content/uploads/2022/06/00.piramidi-egitto_fb.jpg'
            ],
            [
                'title' => 'Scoperta di Machu Picchu',
                'departure_date' => '2024/12/01',
                'return_date' => '2024/12/10',
                'image_url' => 'https://staticgeopop.akamaized.net/wp-content/uploads/sites/32/2022/09/iStock-1085421844.jpg?im=AspectCrop=(16,9);'
            ],
            [
                'title' => 'Relax alle Maldive',
                'departure_date' => '2025/02/20',
                'return_date' => '2025/03/01',
                'image_url' => 'https://siviaggia.it/wp-content/uploads/sites/2/2019/08/maldive-low-cost-ecc80-dhiffushi-lisola-perfetta-per-un-budget-ridotto.jpg'
            ],
            [
                'title' => 'Tour dell\'India',
                'departure_date' => '2024/11/10',
                'return_date' => '2024/11/25',
                'image_url' => 'https://www.viaggidafotografare.it/wp-content/uploads/2020/03/viaggidafotografare-India-Agra-Taj-Mahal_56-1024x641.jpg'
            ],
            [
                'title' => 'Escursione nel Grand Canyon',
                'departure_date' => '2024/10/01',
                'return_date' => '2024/10/07',
                'image_url' => 'https://www.viaggi-usa.it/wp-content/uploads/2014/11/da-grand-canyon-a-los-angeles-1.jpg'
            ],
            [
                'title' => 'Esplorazione delle Galápagos',
                'departure_date' => '2025/03/10',
                'return_date' => '2025/03/20',
                'image_url' => 'https://www.costacrociere.it/content/dam/costa/costa-magazine/articles-magazine/islands/galapagos-islands/5-bartolom%C3%A9.jpg.image.1296.974.high.jpg'
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

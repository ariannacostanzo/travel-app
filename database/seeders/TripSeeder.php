<?php

namespace Database\Seeders;

use App\Models\Day;
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
                'title' => 'Trip to Paris',
                'departure_date' => '2024/09/15',
                'return_date' => '2024/09/22',
                'image_url' => 'https://www.caldana.it/files/blog/image/curiosita_su_parigi_tour.jpg',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in Paris', 'description' => 'Arrival day and hotel accommodation.', 'date' => '2024/09/15'],
                    ['number' => 2, 'title' => 'City Tour', 'description' => 'Visit to the Eiffel Tower and the Louvre Museum.', 'date' => '2024/09/16'],
                    ['number' => 3, 'title' => 'Exploring Historical Quarters', 'description' => 'Walk through Montmartre and Le Marais neighborhoods.', 'date' => '2024/09/17'],
                    ['number' => 4, 'title' => 'Visit to the Palace of Versailles', 'description' => 'Trip to the Palace of Versailles and its gardens.', 'date' => '2024/09/18'],
                    ['number' => 5, 'title' => 'Seine River Cruise', 'description' => 'Evening cruise on the Seine.', 'date' => '2024/09/19'],
                    ['number' => 6, 'title' => 'Orsay Museum', 'description' => 'Visit to the Orsay Museum and Notre-Dame Cathedral.', 'date' => '2024/09/20'],
                    ['number' => 7, 'title' => 'Shopping on the Champs-Élysées', 'description' => 'Shopping day on the Champs-Élysées.', 'date' => '2024/09/21'],
                    ['number' => 8, 'title' => 'Return', 'description' => 'Return day home.', 'date' => '2024/09/22']
                ]
            ],
            [
                'title' => 'Kenya Safari',
                'departure_date' => '2024/10/05',
                'return_date' => '2024/10/15',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in Nairobi', 'description' => 'Arrival and hotel accommodation.', 'date' => '2024/10/05'],
                    ['number' => 2, 'title' => 'Safari at Maasai Mara', 'description' => 'Safari day at Maasai Mara.', 'date' => '2024/10/06'],
                    ['number' => 3, 'title' => 'Safari at Maasai Mara', 'description' => 'Second safari day with picnic.', 'date' => '2024/10/07'],
                    ['number' => 4, 'title' => 'Safari at Maasai Mara', 'description' => 'Exploration of natural reserves.', 'date' => '2024/10/08'],
                    ['number' => 5, 'title' => 'Visit to Lake Nakuru', 'description' => 'Day dedicated to Lake Nakuru and its flamingos.', 'date' => '2024/10/09'],
                    ['number' => 6, 'title' => 'Safari at Amboseli Park', 'description' => 'Visit to Amboseli National Park.', 'date' => '2024/10/10'],
                    ['number' => 7, 'title' => 'Safari at Amboseli Park', 'description' => 'Second day at Amboseli Park.', 'date' => '2024/10/11'],
                    ['number' => 8, 'title' => 'Visit to Maasai Village', 'description' => 'Interaction with the Maasai community.', 'date' => '2024/10/12'],
                    ['number' => 9, 'title' => 'Relaxation Day', 'description' => 'Free day to relax.', 'date' => '2024/10/13'],
                    ['number' => 10, 'title' => 'Return', 'description' => 'Return to Nairobi and departure.', 'date' => '2024/10/15']
                ],
                'image_url' => 'https://www.kanaloa.it/wp-content/uploads/2019/05/kanaloa-viaggi-liberta-kenya-safari-10.jpg'
            ],
            [
                'title' => 'Japan Tour',
                'departure_date' => '2025/03/20',
                'return_date' => '2025/04/05',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in Tokyo', 'description' => 'Welcome to Japan and hotel accommodation.', 'date' => '2025/03/20'],
                    ['number' => 2, 'title' => 'Visit to Tokyo', 'description' => 'Exploration of Shibuya and Shinjuku districts.', 'date' => '2025/03/21'],
                    ['number' => 3, 'title' => 'Visit to Kyoto', 'description' => 'Trip to Fushimi Inari Shrine.', 'date' => '2025/03/22'],
                    ['number' => 4, 'title' => 'Exploration of Nara', 'description' => 'Visit to the deer park and Todai-ji Temple.', 'date' => '2025/03/23'],
                    ['number' => 5, 'title' => 'Visit to Mount Fuji', 'description' => 'Excursion to Mount Fuji and relaxation in Onsen.', 'date' => '2025/03/24'],
                    ['number' => 6, 'title' => 'Visit to Hiroshima', 'description' => 'Trip to the Peace Park in Hiroshima.', 'date' => '2025/03/25'],
                    ['number' => 7, 'title' => 'Visit to Osaka', 'description' => 'Exploration of Osaka Castle and local markets.', 'date' => '2025/03/26'],
                    ['number' => 8, 'title' => 'Visit to Shirakawa-go Village', 'description' => 'Exploration of the traditional village of Shirakawa-go.', 'date' => '2025/03/27'],
                    ['number' => 9, 'title' => 'Visit to Himeji Castle', 'description' => 'Trip to the famous Himeji Castle.', 'date' => '2025/03/28'],
                    ['number' => 10, 'title' => 'Return', 'description' => 'Return day to Tokyo and departure.', 'date' => '2025/04/05']
                ],
                'image_url' => 'https://www.aretinatours.com/media/k2/items/cache/giappa_L.jpg'
            ],
            [
                'title' => 'Caribbean Cruise',
                'departure_date' => '2024/12/01',
                'return_date' => '2024/12/10',
                'days' => [
                    ['number' => 1, 'title' => 'Boarding in Miami', 'description' => 'Boarding the cruise ship.', 'date' => '2024/12/01'],
                    ['number' => 2, 'title' => 'Sailing to Nassau', 'description' => 'Day at sea towards Nassau.', 'date' => '2024/12/02'],
                    ['number' => 3, 'title' => 'Visit to Nassau', 'description' => 'Exploration of the capital of the Bahamas.', 'date' => '2024/12/03'],
                    ['number' => 4, 'title' => 'Sailing to Cozumel', 'description' => 'Day at sea towards Cozumel, Mexico.', 'date' => '2024/12/04'],
                    ['number' => 5, 'title' => 'Visit to Cozumel', 'description' => 'Exploration of Cozumel and snorkeling.', 'date' => '2024/12/05'],
                    ['number' => 6, 'title' => 'Sailing to Roatán', 'description' => 'Day at sea towards Roatán, Honduras.', 'date' => '2024/12/06'],
                    ['number' => 7, 'title' => 'Visit to Roatán', 'description' => 'Exploration of beaches and coral reefs.', 'date' => '2024/12/07'],
                    ['number' => 8, 'title' => 'Sailing back to Miami', 'description' => 'Day at sea returning to Miami.', 'date' => '2024/12/08'],
                    ['number' => 9, 'title' => 'Relax on the Ship', 'description' => 'Relaxation and activities on the ship.', 'date' => '2024/12/09'],
                    ['number' => 10, 'title' => 'Disembark in Miami', 'description' => 'Disembarkation and return home.', 'date' => '2024/12/10']
                ],
                'image_url' => 'https://st.ilfattoquotidiano.it/wp-content/uploads/2023/09/22/shutterstock_1938868960.jpg'
            ],
            [
                'title' => 'Iceland Exploration',
                'departure_date' => '2025/01/10',
                'return_date' => '2025/01/20',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in Reykjavik', 'description' => 'Arrival and hotel accommodation.', 'date' => '2025/01/10'],
                    ['number' => 2, 'title' => 'Visit to the Blue Lagoon', 'description' => 'Relaxation in the geothermal waters of the Blue Lagoon.', 'date' => '2025/01/11'],
                    ['number' => 3, 'title' => 'Golden Circle Tour', 'description' => 'Visit to Thingvellir, Gullfoss, and Geysir.', 'date' => '2025/01/12'],
                    ['number' => 4, 'title' => 'Southern Iceland Waterfalls', 'description' => 'Exploration of Skógafoss and Seljalandsfoss.', 'date' => '2025/01/13'],
                    ['number' => 5, 'title' => 'Visit to the Glacier Lagoon', 'description' => 'Trip to Jökulsárlón and Diamond Beach.', 'date' => '2025/01/14'],
                    ['number' => 6, 'title' => 'Northern Lights Tour', 'description' => 'Night tour to see the Northern Lights.', 'date' => '2025/01/15'],
                    ['number' => 7, 'title' => 'Visit to Snæfellsnes Peninsula', 'description' => 'Exploration of Snæfellsjökull National Park.', 'date' => '2025/01/16'],
                    ['number' => 8, 'title' => 'Exploring Reykjavik', 'description' => 'Day dedicated to exploring Reykjavik.', 'date' => '2025/01/17'],
                    ['number' => 9, 'title' => 'Relaxation Day', 'description' => 'Free day to relax and shop.', 'date' => '2025/01/18'],
                    ['number' => 10, 'title' => 'Return', 'description' => 'Return day home.', 'date' => '2025/01/20']
                ],
                'image_url' => 'https://media-assets.vanityfair.it/photos/643ffdd6070ddb7f7d409be2/16:9/w_2560%2Cc_limit/DJI_0449_medium1600x1066.jpg'
            ],
            [
                'title' => 'Tuscany Tour',
                'departure_date' => '2024/11/01',
                'return_date' => '2024/11/08',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in Florence', 'description' => 'Arrival and hotel accommodation.', 'date' => '2024/11/01'],
                    ['number' => 2, 'title' => 'Visit to Florence', 'description' => 'Visit to the Uffizi Gallery and Ponte Vecchio.', 'date' => '2024/11/02'],
                    ['number' => 3, 'title' => 'Exploring Siena', 'description' => 'Visit to Piazza del Campo and the Siena Cathedral.', 'date' => '2024/11/03'],
                    ['number' => 4, 'title' => 'Chianti Hills Tour', 'description' => 'Wine tasting in the Chianti region.', 'date' => '2024/11/04'],
                    ['number' => 5, 'title' => 'Visit to Pisa', 'description' => 'Exploration of the Leaning Tower of Pisa.', 'date' => '2024/11/05'],
                    ['number' => 6, 'title' => 'Exploring Lucca', 'description' => 'Visit to the historic center of Lucca.', 'date' => '2024/11/06'],
                    ['number' => 7, 'title' => 'Visit to San Gimignano', 'description' => 'Exploration of the medieval town of San Gimignano.', 'date' => '2024/11/07'],
                    ['number' => 8, 'title' => 'Return', 'description' => 'Return day home.', 'date' => '2024/11/08']
                ],
                'image_url' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2021/08/15_Castiglione_della_Pescaia_iStock-1-1080x721.jpg'
            ],
            [
                'title' => 'Weekend in London',
                'departure_date' => '2024/09/25',
                'return_date' => '2024/09/28',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in London', 'description' => 'Arrival and hotel accommodation.', 'date' => '2024/09/25'],
                    ['number' => 2, 'title' => 'City Tour', 'description' => 'Visit to Buckingham Palace and Big Ben.', 'date' => '2024/09/26'],
                    ['number' => 3, 'title' => 'Exploring Historical Sites', 'description' => 'Visit to Westminster Abbey and the British Museum.', 'date' => '2024/09/27'],
                    ['number' => 4, 'title' => 'Return', 'description' => 'Return day home.', 'date' => '2024/09/28']
                ],
                'image_url' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2017/03/unnamed1.jpg'
            ],
            [
                'title' => 'Visit to New York',
                'departure_date' => '2024/10/10',
                'return_date' => '2024/10/17',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in New York', 'description' => 'Arrival and hotel accommodation.', 'date' => '2024/10/10'],
                    ['number' => 2, 'title' => 'Visit to Times Square', 'description' => 'Walk around Times Square and the surrounding areas.', 'date' => '2024/10/11'],
                    ['number' => 3, 'title' => 'Exploring Central Park', 'description' => 'Exploration of Central Park and nearby museums.', 'date' => '2024/10/12'],
                    ['number' => 4, 'title' => 'Visit to the Statue of Liberty', 'description' => 'Visit to the Statue of Liberty and Ellis Island.', 'date' => '2024/10/13'],
                    ['number' => 5, 'title' => 'Exploring Museums', 'description' => 'Visit to MoMA and the Metropolitan Museum of Art.', 'date' => '2024/10/14'],
                    ['number' => 6, 'title' => 'Visit to Brooklyn', 'description' => 'Walk across the Brooklyn Bridge and explore Brooklyn.', 'date' => '2024/10/15'],
                    ['number' => 7, 'title' => 'Visit to Harlem', 'description' => 'Exploration of Harlem and the Apollo Theater.', 'date' => '2024/10/16'],
                    ['number' => 8, 'title' => 'Return', 'description' => 'Return day home.', 'date' => '2024/10/17']
                ],
                'image_url' => 'https://as1.ftcdn.net/v2/jpg/01/90/16/22/1000_F_190162235_kht4YkbpXqlBa2bnUB2qlWbvcZfH6t0g.jpg'
            ],
            [
                'title' => 'Adventure in Australia',
                'departure_date' => '2025/02/01',
                'return_date' => '2025/02/14',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in Sydney', 'description' => 'Arrival and hotel accommodation.', 'date' => '2025/02/01'],
                    ['number' => 2, 'title' => 'Exploring Sydney', 'description' => 'Visit to the Sydney Opera House and the harbor.', 'date' => '2025/02/02'],
                    ['number' => 3, 'title' => 'Blue Mountains Tour', 'description' => 'Excursion to the Blue Mountains.', 'date' => '2025/02/03'],
                    ['number' => 4, 'title' => 'Great Barrier Reef Visit', 'description' => 'Trip to Cairns and snorkeling at the Great Barrier Reef.', 'date' => '2025/02/04'],
                    ['number' => 5, 'title' => 'Exploring Cairns', 'description' => 'Visit to the Daintree Rainforest.', 'date' => '2025/02/05'],
                    ['number' => 6, 'title' => 'Visit to Uluru', 'description' => 'Exploration of Uluru and surrounding areas.', 'date' => '2025/02/06'],
                    ['number' => 7, 'title' => 'Exploring Melbourne', 'description' => 'Visit to the city and the Great Ocean Road.', 'date' => '2025/02/07'],
                    ['number' => 8, 'title' => 'Exploring Tasmania', 'description' => 'Trip to Hobart and the wilderness of Tasmania.', 'date' => '2025/02/08'],
                    ['number' => 9, 'title' => 'Visit to Canberra', 'description' => 'Exploration of the capital, Canberra.', 'date' => '2025/02/09'],
                    ['number' => 10, 'title' => 'Relaxation Day', 'description' => 'Free day to relax or explore.', 'date' => '2025/02/10'],
                    ['number' => 11, 'title' => 'Visit to Perth', 'description' => 'Exploration of Perth and the surrounding areas.', 'date' => '2025/02/11'],
                    ['number' => 12, 'title' => 'Exploring Adelaide', 'description' => 'Visit to the Adelaide hills and wine regions.', 'date' => '2025/02/12'],
                    ['number' => 13, 'title' => 'Return', 'description' => 'Return day home.', 'date' => '2025/02/14']
                ],
                'image_url' => 'https://a.cdn-hotels.com/gdcs/production81/d1465/89e8e0d7-7bb0-419d-84c3-0b3f9717b8a5.jpg'
            ],
            [
                'title' => 'North India Tour',
                'departure_date' => '2024/12/15',
                'return_date' => '2024/12/28',
                'days' => [
                    ['number' => 1, 'title' => 'Arrival in Delhi', 'description' => 'Welcome to India and hotel accommodation.', 'date' => '2024/12/15'],
                    ['number' => 2, 'title' => 'Visit to Delhi', 'description' => 'Explore Qutub Minar and India Gate.', 'date' => '2024/12/16'],
                    ['number' => 3, 'title' => 'Visit to Agra', 'description' => 'Visit the Taj Mahal and Agra Fort.', 'date' => '2024/12/17'],
                    ['number' => 4, 'title' => 'Visit to Jaipur', 'description' => 'Explore the Hawa Mahal and Amber Fort.', 'date' => '2024/12/18'],
                    ['number' => 5, 'title' => 'Ranthambore Safari', 'description' => 'Safari at Ranthambore National Park.', 'date' => '2024/12/19'],
                    ['number' => 6, 'title' => 'Exploring Jodhpur', 'description' => 'Visit Mehrangarh Fort and Jaswant Thada.', 'date' => '2024/12/20'],
                    ['number' => 7, 'title' => 'Visit to Udaipur', 'description' => 'Explore Lake Pichola and City Palace.', 'date' => '2024/12/21'],
                    ['number' => 8, 'title' => 'Exploring Varanasi', 'description' => 'Visit the ghats of the Ganges and Sarnath.', 'date' => '2024/12/22'],
                    ['number' => 9, 'title' => 'Exploring Khajuraho', 'description' => 'Visit the Khajuraho temples.', 'date' => '2024/12/23'],
                    ['number' => 10, 'title' => 'Return', 'description' => 'Return to Delhi and departure.', 'date' => '2024/12/28']
                ],
                'image_url' => 'https://images-ext-1.discordapp.net/external/lXlFah636p-myP5ypUfdCZ586D1lZ6d-kinYKympHVk/https/www.viaggidafotografare.it/wp-content/uploads/2020/03/viaggidafotografare-India-Agra-Taj-Mahal_56-1024x641.jpg?format=webp&width=400&height=250'
            ]

        ];

        foreach ($trips as $trip) {
            $users = User::pluck('id')->toArray();

            $new_trip = new Trip();
            $new_trip->user_id = $users[array_rand($users)];
            $new_trip->title = $trip['title'];
            $new_trip->departure_date = $trip['departure_date'];
            $new_trip->return_date = $trip['return_date'];
            $new_trip->image_url = $trip['image_url'];
            $new_trip->save();

            foreach ($trip['days'] as $day) {
                $new_day = new Day();

                $new_day->trip_id = $new_trip->id;
                $new_day->fill($day);
                $new_day->save();
            }
        }
    }
}

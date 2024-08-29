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
                'title' => 'Viaggio a Parigi',
                'departure_date' => '2024/09/15',
                'return_date' => '2024/09/22',
                'image_url' => 'https://www.caldana.it/files/blog/image/curiosita_su_parigi_tour.jpg',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a Parigi', 'description' => 'Giornata di arrivo e sistemazione in hotel.', 'date' => '2024/09/15'],
                    ['number' => 2, 'title' => 'Tour della città', 'description' => 'Visita alla Torre Eiffel e al Museo del Louvre.', 'date' => '2024/09/16'],
                    ['number' => 3, 'title' => 'Esplorazione dei quartieri storici', 'description' => 'Passeggiata nei quartieri di Montmartre e Le Marais.', 'date' => '2024/09/17'],
                    ['number' => 4, 'title' => 'Visita alla Reggia di Versailles', 'description' => 'Gita alla Reggia di Versailles e ai suoi giardini.', 'date' => '2024/09/18'],
                    ['number' => 5, 'title' => 'Crociera sulla Senna', 'description' => 'Crociera serale sulla Senna.', 'date' => '2024/09/19'],
                    ['number' => 6, 'title' => 'Museo d\'Orsay', 'description' => 'Visita al Museo d\'Orsay e alla cattedrale di Notre-Dame.', 'date' => '2024/09/20'],
                    ['number' => 7, 'title' => 'Shopping sugli Champs-Élysées', 'description' => 'Giornata di shopping sugli Champs-Élysées.', 'date' => '2024/09/21'],
                    ['number' => 8, 'title' => 'Ritorno', 'description' => 'Giornata di ritorno a casa.', 'date' => '2024/09/22']
                ]
            ],
            [
                'title' => 'Safari in Kenya',
                'departure_date' => '2024/10/05',
                'return_date' => '2024/10/15',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a Nairobi', 'description' => 'Arrivo e sistemazione in hotel.', 'date' => '2024/10/05'],
                    ['number' => 2, 'title' => 'Safari al Maasai Mara', 'description' => 'Giornata di safari nel Maasai Mara.', 'date' => '2024/10/06'],
                    ['number' => 3, 'title' => 'Safari al Maasai Mara', 'description' => 'Secondo giorno di safari con picnic.', 'date' => '2024/10/07'],
                    ['number' => 4, 'title' => 'Safari al Maasai Mara', 'description' => 'Esplorazione delle riserve naturali.', 'date' => '2024/10/08'],
                    ['number' => 5, 'title' => 'Visita al Lago Nakuru', 'description' => 'Giornata dedicata al Lago Nakuru e ai suoi fenicotteri.', 'date' => '2024/10/09'],
                    ['number' => 6, 'title' => 'Safari al Parco Amboseli', 'description' => 'Visita al Parco Nazionale Amboseli.', 'date' => '2024/10/10'],
                    ['number' => 7, 'title' => 'Safari al Parco Amboseli', 'description' => 'Secondo giorno al Parco Amboseli.', 'date' => '2024/10/11'],
                    ['number' => 8, 'title' => 'Visita al villaggio Maasai', 'description' => 'Interazione con la comunità Maasai.', 'date' => '2024/10/12'],
                    ['number' => 9, 'title' => 'Giornata di relax', 'description' => 'Giornata libera per rilassarsi.', 'date' => '2024/10/13'],
                    ['number' => 10, 'title' => 'Ritorno', 'description' => 'Ritorno a Nairobi e partenza.', 'date' => '2024/10/15']
                ],
                'image_url' => 'https://www.kanaloa.it/wp-content/uploads/2019/05/kanaloa-viaggi-liberta-kenya-safari-10.jpg'
            ],
            [
                'title' => 'Tour del Giappone',
                'departure_date' => '2025/03/20',
                'return_date' => '2025/04/05',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a Tokyo', 'description' => 'Benvenuto in Giappone e sistemazione in hotel.', 'date' => '2025/03/20'],
                    ['number' => 2, 'title' => 'Visita di Tokyo', 'description' => 'Esplorazione dei quartieri di Shibuya e Shinjuku.', 'date' => '2025/03/21'],
                    ['number' => 3, 'title' => 'Visita a Kyoto', 'description' => 'Gita al Santuario di Fushimi Inari.', 'date' => '2025/03/22'],
                    ['number' => 4, 'title' => 'Esplorazione di Nara', 'description' => 'Visita al parco dei cervi e al Tempio Todai-ji.', 'date' => '2025/03/23'],
                    ['number' => 5, 'title' => 'Visita al Monte Fuji', 'description' => 'Escursione al Monte Fuji e relax negli Onsen.', 'date' => '2025/03/24'],
                    ['number' => 6, 'title' => 'Visita a Hiroshima', 'description' => 'Gita al Parco della Pace di Hiroshima.', 'date' => '2025/03/25'],
                    ['number' => 7, 'title' => 'Visita a Osaka', 'description' => 'Esplorazione del castello di Osaka e dei mercati locali.', 'date' => '2025/03/26'],
                    ['number' => 8, 'title' => 'Visita al villaggio di Shirakawa-go', 'description' => 'Esplorazione del villaggio tradizionale di Shirakawa-go.', 'date' => '2025/03/27'],
                    ['number' => 9, 'title' => 'Visita al Castello di Himeji', 'description' => 'Gita al famoso Castello di Himeji.', 'date' => '2025/03/28'],
                    ['number' => 10, 'title' => 'Ritorno', 'description' => 'Giornata di ritorno a Tokyo e partenza.', 'date' => '2025/04/05']
                ],
                'image_url' => 'https://www.aretinatours.com/media/k2/items/cache/giappa_L.jpg'
            ],
            [
                'title' => 'Crociera ai Caraibi',
                'departure_date' => '2024/12/01',
                'return_date' => '2024/12/10',
                'days' => [
                    ['number' => 1, 'title' => 'Imbarco a Miami', 'description' => 'Imbarco sulla nave da crociera.', 'date' => '2024/12/01'],
                    ['number' => 2, 'title' => 'Navigazione verso Nassau', 'description' => 'Giornata in mare verso Nassau.', 'date' => '2024/12/02'],
                    ['number' => 3, 'title' => 'Visita a Nassau', 'description' => 'Esplorazione della capitale delle Bahamas.', 'date' => '2024/12/03'],
                    ['number' => 4, 'title' => 'Navigazione verso Cozumel', 'description' => 'Giornata in mare verso Cozumel, Messico.', 'date' => '2024/12/04'],
                    ['number' => 5, 'title' => 'Visita a Cozumel', 'description' => 'Esplorazione di Cozumel e snorkeling.', 'date' => '2024/12/05'],
                    ['number' => 6, 'title' => 'Navigazione verso Roatán', 'description' => 'Giornata in mare verso Roatán, Honduras.', 'date' => '2024/12/06'],
                    ['number' => 7, 'title' => 'Visita a Roatán', 'description' => 'Esplorazione delle spiagge e delle barriere coralline.', 'date' => '2024/12/07'],
                    ['number' => 8, 'title' => 'Navigazione verso Miami', 'description' => 'Giornata in mare di ritorno verso Miami.', 'date' => '2024/12/08'],
                    ['number' => 9, 'title' => 'Relax sulla nave', 'description' => 'Giornata di relax e attività sulla nave.', 'date' => '2024/12/09'],
                    ['number' => 10, 'title' => 'Sbarco a Miami', 'description' => 'Sbarco e ritorno a casa.', 'date' => '2024/12/10']
                ],
                'image_url' => 'https://st.ilfattoquotidiano.it/wp-content/uploads/2023/09/22/shutterstock_1938868960.jpg'
            ],
            [
                'title' => 'Esplorazione in Islanda',
                'departure_date' => '2025/01/10',
                'return_date' => '2025/01/20',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a Reykjavik', 'description' => 'Benvenuto in Islanda e sistemazione in hotel.', 'date' => '2025/01/10'],
                    ['number' => 2, 'title' => 'Visita alla Laguna Blu', 'description' => 'Relax nelle acque termali della Laguna Blu.', 'date' => '2025/01/11'],
                    ['number' => 3, 'title' => 'Cascate e Geyser', 'description' => 'Esplorazione del Circolo d\'Oro: Geysir, Gullfoss, e Þingvellir.', 'date' => '2025/01/12'],
                    ['number' => 4, 'title' => 'Esplorazione del sud', 'description' => 'Visita alle cascate Seljalandsfoss e Skógafoss.', 'date' => '2025/01/13'],
                    ['number' => 5, 'title' => 'Visita alla laguna glaciale', 'description' => 'Esplorazione della laguna glaciale di Jökulsárlón.', 'date' => '2025/01/14'],
                    ['number' => 6, 'title' => 'Escursione sui ghiacciai', 'description' => 'Escursione sui ghiacciai e vista sull\'Aurora Boreale.', 'date' => '2025/01/15'],
                    ['number' => 7, 'title' => 'Visita alla Penisola di Snæfellsnes', 'description' => 'Esplorazione della Penisola di Snæfellsnes.', 'date' => '2025/01/16'],
                    ['number' => 8, 'title' => 'Esplorazione del nord', 'description' => 'Visita a Akureyri e al Lago Mývatn.', 'date' => '2025/01/17'],
                    ['number' => 9, 'title' => 'Giornata di relax', 'description' => 'Giornata libera per esplorare Reykjavik.', 'date' => '2025/01/18'],
                    ['number' => 10, 'title' => 'Ritorno', 'description' => 'Ritorno a casa.', 'date' => '2025/01/20']
                ],
                'image_url' => 'https://media-assets.vanityfair.it/photos/643ffdd6070ddb7f7d409be2/16:9/w_2560%2Cc_limit/DJI_0449_medium1600x1066.jpg'
            ],
            [
                'title' => 'Giro della Toscana',
                'departure_date' => '2024/11/01',
                'return_date' => '2024/11/08',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a Firenze', 'description' => 'Benvenuto in Toscana e sistemazione in hotel.', 'date' => '2024/11/01'],
                    ['number' => 2, 'title' => 'Visita di Firenze', 'description' => 'Visita al Duomo di Firenze e alla Galleria degli Uffizi.', 'date' => '2024/11/02'],
                    ['number' => 3, 'title' => 'Esplorazione di Siena', 'description' => 'Visita alla Piazza del Campo e al Duomo di Siena.', 'date' => '2024/11/03'],
                    ['number' => 4, 'title' => 'Tour delle colline del Chianti', 'description' => 'Degustazione di vini nelle colline del Chianti.', 'date' => '2024/11/04'],
                    ['number' => 5, 'title' => 'Visita a Pisa', 'description' => 'Esplorazione della Torre di Pisa e Piazza dei Miracoli.', 'date' => '2024/11/05'],
                    ['number' => 6, 'title' => 'Visita a Lucca', 'description' => 'Passeggiata sulle mura di Lucca e visita al centro storico.', 'date' => '2024/11/06'],
                    ['number' => 7, 'title' => 'Gita a San Gimignano', 'description' => 'Esplorazione del borgo medievale di San Gimignano.', 'date' => '2024/11/07'],
                    ['number' => 8, 'title' => 'Ritorno', 'description' => 'Ritorno a Firenze e partenza.', 'date' => '2024/11/08']
                ],
                'image_url' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2021/08/15_Castiglione_della_Pescaia_iStock-1-1080x721.jpg?v=1628095722'
            ],
            [
                'title' => 'Weekend a Londra',
                'departure_date' => '2024/09/25',
                'return_date' => '2024/09/28',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a Londra', 'description' => 'Benvenuto a Londra e sistemazione in hotel.', 'date' => '2024/09/25'],
                    ['number' => 2, 'title' => 'Visita di Londra', 'description' => 'Tour di Buckingham Palace, Big Ben e Westminster Abbey.', 'date' => '2024/09/26'],
                    ['number' => 3, 'title' => 'Visita ai musei', 'description' => 'Esplorazione del British Museum e della National Gallery.', 'date' => '2024/09/27'],
                    ['number' => 4, 'title' => 'Ritorno', 'description' => 'Ritorno a casa.', 'date' => '2024/09/28']
                ],
                'image_url' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2017/03/unnamed1.jpg?v=1490116447'
            ],
            [
                'title' => 'Visita a New York',
                'departure_date' => '2024/10/10',
                'return_date' => '2024/10/17',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a New York', 'description' => 'Benvenuto a New York e sistemazione in hotel.', 'date' => '2024/10/10'],
                    ['number' => 2, 'title' => 'Visita della città', 'description' => 'Esplorazione di Times Square e Central Park.', 'date' => '2024/10/11'],
                    ['number' => 3, 'title' => 'Statua della Libertà', 'description' => 'Visita alla Statua della Libertà e Ellis Island.', 'date' => '2024/10/12'],
                    ['number' => 4, 'title' => 'Musei e gallerie', 'description' => 'Visita al MoMA e al Museo di Storia Naturale.', 'date' => '2024/10/13'],
                    ['number' => 5, 'title' => 'Tour di Brooklyn', 'description' => 'Passeggiata sul Ponte di Brooklyn e visita a Dumbo.', 'date' => '2024/10/14'],
                    ['number' => 6, 'title' => 'Visita a Harlem', 'description' => 'Esplorazione di Harlem e tour gospel.', 'date' => '2024/10/15'],
                    ['number' => 7, 'title' => 'Shopping sulla Fifth Avenue', 'description' => 'Giornata di shopping sulla Fifth Avenue.', 'date' => '2024/10/16'],
                    ['number' => 8, 'title' => 'Ritorno', 'description' => 'Ritorno a casa.', 'date' => '2024/10/17']
                ],
                'image_url' => 'https://as1.ftcdn.net/v2/jpg/01/90/16/22/1000_F_190162235_kht4YkbpXqlBa2bnUB2qlWbvcZfH6t0g.jpg'
            ],
            [
                'title' => 'Avventura in Australia',
                'departure_date' => '2025/02/01',
                'return_date' => '2025/02/14',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a Sydney', 'description' => 'Benvenuto in Australia e sistemazione in hotel.', 'date' => '2025/02/01'],
                    ['number' => 2, 'title' => 'Visita di Sydney', 'description' => 'Esplorazione dell\'Opera House e del Sydney Harbour Bridge.', 'date' => '2025/02/02'],
                    ['number' => 3, 'title' => 'Gita alle Blue Mountains', 'description' => 'Escursione giornaliera alle Blue Mountains.', 'date' => '2025/02/03'],
                    ['number' => 4, 'title' => 'Visita alla Grande Barriera Corallina', 'description' => 'Snorkeling alla Grande Barriera Corallina.', 'date' => '2025/02/04'],
                    ['number' => 5, 'title' => 'Esplorazione di Cairns', 'description' => 'Esplorazione della foresta pluviale di Daintree.', 'date' => '2025/02/05'],
                    ['number' => 6, 'title' => 'Gita a Uluru', 'description' => 'Visita all\'iconico monolite di Uluru.', 'date' => '2025/02/06'],
                    ['number' => 7, 'title' => 'Visita a Melbourne', 'description' => 'Tour dei quartieri artistici e della Great Ocean Road.', 'date' => '2025/02/07'],
                    ['number' => 8, 'title' => 'Esplorazione della Tasmania', 'description' => 'Visita ai parchi nazionali della Tasmania.', 'date' => '2025/02/08'],
                    ['number' => 9, 'title' => 'Visita a Perth', 'description' => 'Esplorazione di Perth e delle sue spiagge.', 'date' => '2025/02/09'],
                    ['number' => 10, 'title' => 'Ritorno', 'description' => 'Ritorno a Sydney e partenza.', 'date' => '2025/02/14']
                ]
            ],
            [
                'title' => 'Tour dell\'India del Nord',
                'departure_date' => '2024/12/15',
                'return_date' => '2024/12/28',
                'days' => [
                    ['number' => 1, 'title' => 'Arrivo a Delhi', 'description' => 'Benvenuto in India e sistemazione in hotel.', 'date' => '2024/12/15'],
                    ['number' => 2, 'title' => 'Visita a Delhi', 'description' => 'Esplorazione del Qutub Minar e dell\'India Gate.', 'date' => '2024/12/16'],
                    ['number' => 3, 'title' => 'Visita ad Agra', 'description' => 'Visita al Taj Mahal e al Forte di Agra.', 'date' => '2024/12/17'],
                    ['number' => 4, 'title' => 'Visita a Jaipur', 'description' => 'Esplorazione del Palazzo dei Venti e dell\'Amber Fort.', 'date' => '2024/12/18'],
                    ['number' => 5, 'title' => 'Safari al Ranthambore', 'description' => 'Safari al Parco Nazionale di Ranthambore.', 'date' => '2024/12/19'],
                    ['number' => 6, 'title' => 'Esplorazione di Jodhpur', 'description' => 'Visita al Forte Mehrangarh e al Jaswant Thada.', 'date' => '2024/12/20'],
                    ['number' => 7, 'title' => 'Visita a Udaipur', 'description' => 'Esplorazione del Lago Pichola e del City Palace.', 'date' => '2024/12/21'],
                    ['number' => 8, 'title' => 'Esplorazione di Varanasi', 'description' => 'Visita ai ghat del Gange e alla Sarnath.', 'date' => '2024/12/22'],
                    ['number' => 9, 'title' => 'Esplorazione di Khajuraho', 'description' => 'Visita ai templi di Khajuraho.', 'date' => '2024/12/23'],
                    ['number' => 10, 'title' => 'Ritorno', 'description' => 'Ritorno a Delhi e partenza.', 'date' => '2024/12/28']
                ],
                'image_url' => 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/474000/474772-Australia.jpg'
            ]
        ];

        foreach ($trips as $trip) {
            $users = User::pluck('id')->toArray();

            $new_trip = new Trip();

            foreach ($trips['days'] as $key => $day) {
                $new_day = new Day();

                $new_day->trip_id = $key + 1;
                $new_day->fill($day);
                $new_day->save();
            }

            $new_trip->user_id = $users[array_rand($users)];
            $new_trip->fill($trip);
            $new_trip->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\Stop;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {

        $stops = [

            //? Viaggio a Parigi 
            // Trip to Paris
            // Day 1: Arrival in Paris
            [
                'day_id' => 1,
                'title' => 'Arrival at the Airport',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => '95700 Roissy-en-France, France',
                'latitude' => 49.0097,
                'longitude' => 2.5479
            ],
            [
                'day_id' => 1,
                'title' => 'Hotel Check-in',
                'image' => 'https://img.freepik.com/foto-gratuito/uomo-pieno-del-colpo-che-trasporta-i-bagagli_23-2149963942.jpg?t=st=1725014534~exp=1725018134~hmac=fa43cdf228d2903db5a62537cd61663bb359dac3ef4265c409eedf9853469847&w=1380',
                'foods' => null,
                'address' => '15 Rue de Rivoli, 75001 Paris, France',
                'latitude' => 48.8606,
                'longitude' => 2.3376
            ],
            [
                'day_id' => 1,
                'title' => 'Dinner at Le Fumoir Restaurant',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipO6AtpfOGKyvjsIKLNvGmKEHaVdYw--CbPhlxiB=s680-w680-h510',
                'foods' => 'French cuisine',
                'address' => '6 Rue de l\'Amiral de Coligny, 75001 Paris, France',
                'latitude' => 48.8595,
                'longitude' => 2.3398
            ],

            // Day 2: City Tour
            [
                'day_id' => 2,
                'title' => 'Eiffel Tower',
                'image' => 'https://img.freepik.com/foto-gratuito/torre-eiffel-di-parigi-con-ponte_1101-916.jpg?t=st=1725018355~exp=1725021955~hmac=a641beb5f2e4d3b372c8723e95c23bcbb3897455821d67fa7b61043e088cd8b6&w=1380',
                'foods' => null,
                'address' => 'Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France',
                'latitude' => 48.8584,
                'longitude' => 2.2945
            ],
            [
                'day_id' => 2,
                'title' => 'Louvre Museum',
                'image' => 'https://images.pexels.com/photos/2363/france-landmark-lights-night.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Rue de Rivoli, 75001 Paris, France',
                'latitude' => 48.8606,
                'longitude' => 2.3376
            ],
            [
                'day_id' => 2,
                'title' => 'Lunch at Café Marly',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipMbP6s90Y65yRv__6uJb3ZcewdwktFizxhDb4Ol=s680-w680-h510',
                'foods' => 'French cuisine',
                'address' => '93 Rue de Rivoli, 75001 Paris, France',
                'latitude' => 48.8606,
                'longitude' => 2.3381
            ],
            [
                'day_id' => 2,
                'title' => 'Stroll along the Seine',
                'image' => 'https://images.pexels.com/photos/19395799/pexels-photo-19395799/free-photo-of-fiume-sein.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Quai de la Tournelle, 75005 Paris, France',
                'latitude' => 48.8492,
                'longitude' => 2.3480
            ],

            // Day 3: Exploring Historic Districts
            [
                'day_id' => 3,
                'title' => 'Montmartre',
                'image' => 'https://www.dimoredepoca.it/templates/yootheme/cache/cd/MONTMARTRE-cda8e07f.jpeg',
                'foods' => null,
                'address' => 'Montmartre, Paris, France',
                'latitude' => 48.8867,
                'longitude' => 2.3431
            ],
            [
                'day_id' => 3,
                'title' => 'Café des Deux Moulins',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/93/Caf%C3%A9_des_2_Moulins_June_2010.jpg',
                'foods' => 'French cuisine',
                'address' => '15 Rue Lepic, 75018 Paris, France',
                'latitude' => 48.8892,
                'longitude' => 2.3361
            ],
            [
                'day_id' => 3,
                'title' => 'Le Marais',
                'image' => 'https://siviaggia.it/wp-content/uploads/sites/2/2022/09/Marais_BrasilNut1.jpg',
                'foods' => null,
                'address' => 'Le Marais, Paris, France',
                'latitude' => 48.8558,
                'longitude' => 2.3622
            ],
            [
                'day_id' => 3,
                'title' => 'Lunch at Café de Flore',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipNVt-evgMyJ7R8XLXPe-pIyhdKn4U5diAZ13vUE=s680-w680-h510',
                'foods' => 'French cuisine',
                'address' => '172 Boulevard Saint-Germain, 75006 Paris, France',
                'latitude' => 48.8554,
                'longitude' => 2.3331
            ],

            // Day 4: Visit to the Palace of Versailles
            [
                'day_id' => 4,
                'title' => 'Palace of Versailles',
                'image' => 'https://images.pexels.com/photos/13692199/pexels-photo-13692199.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Place d\'Armes, 78000 Versailles, France',
                'latitude' => 48.8049,
                'longitude' => 2.1204
            ],
            [
                'day_id' => 4,
                'title' => 'Gardens of Versailles',
                'image' => 'https://images.pexels.com/photos/17220698/pexels-photo-17220698/free-photo-of-francia-punto-di-riferimento-alberi-erba.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Place d\'Armes, 78000 Versailles, France',
                'latitude' => 48.8049,
                'longitude' => 2.1204
            ],
            [
                'day_id' => 4,
                'title' => 'Lunch at La Petite Venise Restaurant',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipOknc1lFqn9SRg3t9Ls0MCwA7_LeX7YZy6rfHSt=s680-w680-h510',
                'foods' => 'French cuisine',
                'address' => 'Château de Versailles, 78000 Versailles, France',
                'latitude' => 48.8049,
                'longitude' => 2.1204
            ],

            // Day 5: Seine River Cruise
            [
                'day_id' => 5,
                'title' => 'Seine River Cruise',
                'image' => 'https://www.pimpmytrip.it/wp-content/uploads/2022/12/crociera-senna-parigi.jpg',
                'foods' => null,
                'address' => 'Port de la Conférence, 75008 Paris, France',
                'latitude' => 48.8559,
                'longitude' => 2.3214
            ],
            [
                'day_id' => 5,
                'title' => 'Walk in the Tuileries Gardens',
                'image' => 'https://www.parigi.it/images/large/418_1-jardin-des-tuileries-carrousel-garden-c12745.jpg?v=ee38',
                'foods' => null,
                'address' => 'Place de la Concorde, 75001 Paris, France',
                'latitude' => 48.8638,
                'longitude' => 2.3340
            ],

            // Day 6: Museo d'Orsay
            [
                'day_id' => 6,
                'title' => 'Musée d\'Orsay',
                'image' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/0d/0e/1f/c9.jpg',
                'foods' => null,
                'address' => '1 Rue de la Légion d\'Honneur, 75007 Paris, France',
                'latitude' => 48.8599,
                'longitude' => 2.3266
            ],
            [
                'day_id' => 6,
                'title' => 'Notre-Dame Cathedral',
                'image' => 'https://images.pexels.com/photos/1460145/pexels-photo-1460145.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => '6 Parvis Notre-Dame - Place Jean-Paul II, 75004 Paris, France',
                'latitude' => 48.8534,
                'longitude' => 2.3488
            ],
            [
                'day_id' => 6,
                'title' => 'Lunch at Le Comptoir du Relais',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipPWk2E3dVK9nkIU1vcK5-R6cuIJJRnRFhrGjAN0=s680-w680-h510',
                'foods' => 'French Cuisine',
                'address' => '9 Carrefour de l\'Odeon, 75006 Paris, France',
                'latitude' => 48.8519,
                'longitude' => 2.3380
            ],

            // Day 7: Shopping sugli Champs-Élysées
            [
                'day_id' => 7,
                'title' => 'Champs-Élysées',
                'image' => 'https://www.vadoaparigi.com/wp-content/uploads/2022/08/Champs-Elyse%CC%81es.jpg',
                'foods' => null,
                'address' => 'Champs-Élysées, 75008 Paris, France',
                'latitude' => 48.8698,
                'longitude' => 2.3078
            ],
            [
                'day_id' => 7,
                'title' => 'Galeries Lafayette',
                'image' => 'https://leahtravels.com/wp-content/uploads/2018/03/5-Things-to-do-at-Galeries-Lafayette-in-Paris-by-Leah-Walker-4.jpg',
                'foods' => null,
                'address' => '40 Boulevard Haussmann, 75009 Paris, France',
                'latitude' => 48.8722,
                'longitude' => 2.3330
            ],
            [
                'day_id' => 7,
                'title' => 'Lunch at Ladurée',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipNl87yAb3IFtkjUNCJSYrsYLnx4nkoaWu704etU=s680-w680-h510-rw',
                'foods' => 'Pastry',
                'address' => '75 Avenue des Champs-Élysées, 75008 Paris, France',
                'latitude' => 48.8688,
                'longitude' => 2.3070
            ],

            // Day 8: Ritorno
            [
                'day_id' => 8,
                'title' => 'Hotel Check-out',
                'image' => 'https://img.freepik.com/foto-gratuito/uomo-pieno-del-colpo-che-trasporta-i-bagagli_23-2149963942.jpg?t=st=1725014534~exp=1725018134~hmac=fa43cdf228d2903db5a62537cd61663bb359dac3ef4265c409eedf9853469847&w=1380',
                'foods' => null,
                'address' => '15 Rue de Rivoli, 75001 Paris, France',
                'latitude' => 48.8606,
                'longitude' => 2.3376
            ],
            [
                'day_id' => 8,
                'title' => 'Transfer to the Airport',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => '95700 Roissy-en-France, France',
                'latitude' => 49.0097,
                'longitude' => 2.5479
            ],
            [
                'day_id' => 8,
                'title' => 'Departure',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Charles de Gaulle Airport, 95700 Roissy-en-France, France',
                'latitude' => 49.0097,
                'longitude' => 2.5479
            ],

            //? Safari in Kenya
            // Day 1: Arrivo a Nairobi
            [
                'day_id' => 9,
                'title' => 'Arrival in Nairobi',
                'image' => 'https://media.istockphoto.com/id/637912692/it/foto/nairobi-cityscape-capitale-del-kenya.jpg?s=612x612&w=0&k=20&c=yDJsWeFJ3OHMa3awGjavDF2EAUx1ZueEqPBUszY5nZQ=',
                'foods' => null,
                'address' => 'Hilton Nairobi, Mama Ngina St, Nairobi, Kenya',
                'latitude' => -1.2864,
                'longitude' => 36.8172
            ],
            [
                'day_id' => 9,
                'title' => 'Dinner at the Hotel Restaurant',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local and International Cuisine',
                'address' => 'Hilton Nairobi, Mama Ngina St, Nairobi, Kenya',
                'latitude' => -1.2864,
                'longitude' => 36.8172
            ],

            // Day 2: Safari al Maasai Mara
            [
                'day_id' => 10,
                'title' => 'Departure for Maasai Mara',
                'image' => 'https://images.pexels.com/photos/18000393/pexels-photo-18000393/free-photo-of-paesaggio-natura-cespuglio-animale.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 10,
                'title' => 'Maasai Mara Safari',
                'image' => 'https://rhinotouristcamp.com/wp-content/uploads/2023/06/f671d17b6393a922e4fe959cec5f9a23-1-1-1024x683.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 10,
                'title' => 'Picnic Lunch in Maasai Mara',
                'image' => 'https://www.masaimara.com/assets/img/masai-mara.jpg',
                'foods' => 'Picnic with Local Food',
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],

            // Day 3: Safari al Maasai Mara
            [
                'day_id' => 11,
                'title' => 'Morning Safari in Maasai Mara',
                'image' => 'https://www.shoortravel.com/image/masai-mara-kenya.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 11,
                'title' => 'Lunch at the Camp',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/60/b5/92/campo-tendato-di-lusso.jpg',
                'foods' => 'Packed Lunch',
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 11,
                'title' => 'Afternoon Safari',
                'image' => 'https://bigmama.travel/wp-content/uploads/2022/10/safari-masai-mara-Kenya.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],

            // Day 4: Safari al Maasai Mara
            [
                'day_id' => 12,
                'title' => 'Exploring the Reserve',
                'image' => 'https://cdn.getyourguide.com/img/tour/7a8f378fa32f1a08.jpeg/98.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 12,
                'title' => 'Lunch at the Lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => 'Local Cuisine',
                'address' => 'Maasai Mara Lodge, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 12,
                'title' => 'Evening Safari',
                'image' => 'https://etcdn.net/thumbnails/23272/it-kenya-nakupenda-il-meglio-del-kenya-safari-4gg3nn-e-mare-7ed57.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],

            // Day 5: Visita al Lago Nakuru
            [
                'day_id' => 13,
                'title' => 'Departure for Lake Nakuru',
                'image' => 'https://img.freepik.com/foto-gratuito/stormo-di-fenicotteri-rosa-maggiori_155003-14649.jpg?t=st=1725020003~exp=1725023603~hmac=ee7dc135ad047d76c0a826e027dc48bd1740bcdb4f0b70481024c19b9cb484e8&w=1380',
                'foods' => null,
                'address' => 'Lake Nakuru National Park, Kenya',
                'latitude' => -0.2828,
                'longitude' => 36.0713
            ],
            [
                'day_id' => 13,
                'title' => 'Safari at Lake Nakuru',
                'image' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/6b/6c/11.jpg',
                'foods' => null,
                'address' => 'Lake Nakuru National Park, Kenya',
                'latitude' => -0.2828,
                'longitude' => 36.0713
            ],
            [
                'day_id' => 13,
                'title' => 'Lunch in the Park',
                'image' => 'https://safarikenyaprofessionalguide.com/wp-content/uploads/photo-gallery/TheBushCamp/safari-kenya-bush-camp-19.jpg?bwg=1652373519',
                'foods' => 'Picnic with Lake View',
                'address' => 'Lake Nakuru National Park, Kenya',
                'latitude' => -0.2828,
                'longitude' => 36.0713
            ],

            // Day 6: Safari al Parco Amboseli
            [
                'day_id' => 14,
                'title' => 'Arrival at Amboseli National Park',
                'image' => 'https://www.civitatis.com/f/kenia/nairobi/safari-3-dias-amboseli-589x392.jpg',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 14,
                'title' => 'Safari in Amboseli National Park',
                'image' => 'https://cdn.getyourguide.com/img/tour/d9031239b2110364b19304e46320044577ed019be14ccadeae0aa08823c77ea6.jpeg/146.jpg',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 14,
                'title' => 'Lunch at the Lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => 'Local Cuisine',
                'address' => 'Amboseli Lodge, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],

            // Day 7: Safari al Parco Amboseli
            [
                'day_id' => 15,
                'title' => 'Safari in Amboseli National Park',
                'image' => 'https://cdn.getyourguide.com/img/tour/ccc6dc462014f439eba0cb4325519ac64a0b358d66532ab82d52bef064b48e45.jpg/98.jpg',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 15,
                'title' => 'Lunch at the Camp',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/60/b5/92/campo-tendato-di-lusso.jpg',
                'foods' => 'Packed Lunch',
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 15,
                'title' => 'Afternoon Safari',
                'image' => 'https://viaggidelgenio.it/wp-content/uploads/2023/04/1-1.jpg',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],

            // Day 8: Visita al villaggio Maasai
            [
                'day_id' => 16,
                'title' => 'Visit to Maasai Village',
                'image' => 'https://www.safarikenyaconsamuel.it/wp-content/uploads/elementor/thumbs/Masai-village-1-pxf3msdnoal9tldds0ory2a12gxzdep85ls9khp9r0-optimized.jpg',
                'foods' => null,
                'address' => 'Maasai Village, Kenya',
                'latitude' => -1.6000,
                'longitude' => 36.5000
            ],
            [
                'day_id' => 16,
                'title' => 'Interaction with the Maasai',
                'image' => 'https://cdn.prod.website-files.com/647f003abb4628bf7e34658d/64e7bdf446eef5b331f8eebb_Maasai-shuka.jpg',
                'foods' => 'Traditional Maasai food',
                'address' => 'Maasai Village, Kenya',
                'latitude' => -1.6000,
                'longitude' => 36.5000
            ],
            [
                'day_id' => 16,
                'title' => 'Return to the Lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => null,
                'address' => 'Amboseli Lodge, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],

            // Day 9: Giornata di relax
            [
                'day_id' => 17,
                'title' => 'Relax at the Lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => null,
                'address' => 'Serena Lodge, Amboseli, Kenya',
                'latitude' => -2.7017,
                'longitude' => 37.2307
            ],
            [
                'day_id' => 17,
                'title' => 'Stroll Around the Area',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/250342713.jpg?k=417b11799f9bcf196d4783f089e90e7b4e02f07025f08ccc75519ec349d68e9f&o=&hp=1',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 17,
                'title' => 'Relax by the Lodge Pool',
                'image' => 'https://images.pexels.com/photos/261101/pexels-photo-261101.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Serena Lodge, Amboseli, Kenya',
                'latitude' => -2.7017,
                'longitude' => 37.2307
            ],
            [
                'day_id' => 17,
                'title' => 'Lunch at the Lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => 'International cuisine',
                'address' => 'Serena Lodge, Amboseli, Kenya',
                'latitude' => -2.7017,
                'longitude' => 37.2307
            ],

            // Day 10: Ritorno
            [
                'day_id' => 18,
                'title' => 'Check-out from the Lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => null,
                'address' => 'Serena Lodge, Amboseli, Kenya',
                'latitude' => -2.7017,
                'longitude' => 37.2307
            ],
            [
                'day_id' => 18,
                'title' => 'Transfer to Nairobi',
                'image' => 'https://media.istockphoto.com/id/637912692/it/foto/nairobi-cityscape-capitale-del-kenya.jpg?s=612x612&w=0&k=20&c=yDJsWeFJ3OHMa3awGjavDF2EAUx1ZueEqPBUszY5nZQ=',
                'foods' => null,
                'address' => 'Nairobi, Kenya',
                'latitude' => -1.2864,
                'longitude' => 36.8172
            ],
            [
                'day_id' => 18,
                'title' => 'Departure from Nairobi Airport',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Jomo Kenyatta International Airport, Nairobi, Kenya',
                'latitude' => -1.319167,
                'longitude' => 36.927222
            ],

            //? Tour del Giappone
            // Day 1: Arrivo a Tokyo
            [
                'day_id' => 19,
                'title' => 'Arrival in Tokyo',
                'image' => 'https://www.sognandoilgiappone.com/wp-content/uploads/2024/06/Depositphotos_563013432_S.jpg',
                'foods' => null,
                'address' => 'Shinjuku Granbell Hotel, 2-14-5 Shinjuku, Tokyo, Japan',
                'latitude' => 35.6928,
                'longitude' => 139.7033
            ],
            [
                'day_id' => 19,
                'title' => 'Dinner at a Local Restaurant',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Japanese cuisine',
                'address' => 'Tokyo Restaurant, 1-2-3 Roppongi, Tokyo, Japan',
                'latitude' => 35.6605,
                'longitude' => 139.7292
            ],

            // Day 2: Visita di Tokyo
            [
                'day_id' => 20,
                'title' => 'Exploration of Shibuya',
                'image' => 'https://www.gotokyo.org/it/destinations/western-tokyo/shibuya/images/main.jpg',
                'foods' => null,
                'address' => 'Shibuya Crossing, Shibuya, Tokyo, Japan',
                'latitude' => 35.6595,
                'longitude' => 139.7004
            ],
            [
                'day_id' => 20,
                'title' => 'Visit to Meiji Shrine',
                'image' => 'https://mywowo.net/media/images/cache/tokyo_santuario_meiji_01_presentazione_jpg_1200_630_cover_85.jpg',
                'foods' => null,
                'address' => '1-1 Yoyogikamizonocho, Shibuya City, Tokyo, Japan',
                'latitude' => 35.6764,
                'longitude' => 139.6993
            ],
            [
                'day_id' => 20,
                'title' => 'Exploration of Shinjuku',
                'image' => 'https://i0.wp.com/www.touristjapan.com/wp-content/uploads/2017/06/Shutterstock_635797538.jpg?resize=800%2C534&ssl=1',
                'foods' => null,
                'address' => 'Shinjuku, Tokyo, Japan',
                'latitude' => 35.6938,
                'longitude' => 139.7034
            ],

            // Day 3: Visita a Kyoto
            [
                'day_id' => 21,
                'title' => 'Excursion to Fushimi Inari Shrine',
                'image' => 'https://a1.cdn.japantravel.com/photo/poi-40-213932/800x600!/kyoto-fushimi-inari-taisha-213932.jpg',
                'foods' => null,
                'address' => '68 Fukakusa Yabunouchicho, Fushimi Ward, Kyoto, Japan',
                'latitude' => 34.9671,
                'longitude' => 135.7727
            ],
            [
                'day_id' => 21,
                'title' => 'Lunch at a Traditional Restaurant',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipP7UbBvJRqnkh5Rz-womF4Ip0yHUiDldv_j3Fdi=s680-w680-h510',
                'foods' => 'Traditional Japanese cuisine',
                'address' => 'Kyoto Restaurant, 123 Gion, Kyoto, Japan',
                'latitude' => 35.0034,
                'longitude' => 135.7778
            ],

            // Day 4: Esplorazione di Nara
            [
                'day_id' => 22,
                'title' => 'Visit to Nara Deer Park',
                'image' => 'https://www.giapponepertutti.it/demo/wp-content/uploads/2020/04/Parco-di-Nara-Cervo.jpg',
                'foods' => null,
                'address' => 'Nara Park, Nara, Japan',
                'latitude' => 34.6851,
                'longitude' => 135.8048
            ],
            [
                'day_id' => 22,
                'title' => 'Visit to Todai-ji Temple',
                'image' => 'https://www.italiajapan.net/img/s68/i9/todaiji_70137405-850x551.jpg',
                'foods' => null,
                'address' => '406-1 Zoshicho, Nara, Japan',
                'latitude' => 34.6853,
                'longitude' => 135.8328
            ],
            [
                'day_id' => 22,
                'title' => 'Lunch at a Local Restaurant',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local cuisine',
                'address' => 'Nara Restaurant, 45 Naramachi, Nara, Japan',
                'latitude' => 34.6851,
                'longitude' => 135.8048
            ],

            // Day 5: Visita al Monte Fuji
            [
                'day_id' => 23,
                'title' => 'Excursion to Mount Fuji',
                'image' => 'https://www.sognandoilgiappone.com/wp-content/uploads/2016/01/escursione-monte-fuji.jpg',
                'foods' => null,
                'address' => 'Mount Fuji, Yamanashi, Japan',
                'latitude' => 35.3606,
                'longitude' => 138.7274
            ],
            [
                'day_id' => 23,
                'title' => 'Relaxation in Onsen',
                'image' => 'https://res.cloudinary.com/jnto/image/upload/w_600,fl_lossy,f_auto,q_auto,c_scale/v1/media/filer_public/3d/23/3d23fd41-f180-42b5-ac90-bfd3f9290df3/ginzan_onsen_yamagata_2_le9ekk',
                'foods' => null,
                'address' => 'Hakone Onsen, Hakone, Kanagawa, Japan',
                'latitude' => 35.2333,
                'longitude' => 139.0667
            ],
            [
                'day_id' => 23,
                'title' => 'Lunch at a Restaurant with a View',
                'image' => 'https://images.pexels.com/photos/1579739/pexels-photo-1579739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Japanese cuisine',
                'address' => 'Fuji Restaurant, 123 Fuji View, Yamanashi, Japan',
                'latitude' => 35.3606,
                'longitude' => 138.7274
            ],

            // Day 6: Visita a Hiroshima
            [
                'day_id' => 24,
                'title' => 'Hiroshima Peace Memorial Park',
                'image' => 'https://www.ticonsigliounviaggio.it/wp-content/uploads/2020/08/hiroshima-parco-della-pace-scaled.jpg',
                'foods' => null,
                'address' => '1-2 Nakajimacho, Naka Ward, Hiroshima, Japan',
                'latitude' => 34.3963,
                'longitude' => 132.4594
            ],
            [
                'day_id' => 24,
                'title' => 'Hiroshima Peace Memorial Museum',
                'image' => 'https://res-3.cloudinary.com/jnto/image/upload/w_2064,h_1300,c_fill,f_auto,fl_lossy,q_auto/v1647835741/hiroshima/M_01457_001',
                'foods' => null,
                'address' => '1-2 Nakajimacho, Naka Ward, Hiroshima, Japan',
                'latitude' => 34.3963,
                'longitude' => 132.4594
            ],
            [
                'day_id' => 24,
                'title' => 'Lunch in Hiroshima',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Okonomiyaki',
                'address' => 'Hiroshima Restaurant, 456 Peace Avenue, Hiroshima, Japan',
                'latitude' => 34.3963,
                'longitude' => 132.4594
            ],

            // Day 7: Visita a Osaka
            [
                'day_id' => 25,
                'title' => 'Exploration of Osaka Castle',
                'image' => 'https://www.lastampa.it/image/contentid/policy:1.35869340:1561542025/NX-VGG-GAL-G355552-shutterstock_39215380-355556.jpg?f=gallery_1280&h=702&w=1280&$p$f$h$w=44e99dd',
                'foods' => null,
                'address' => '1-1 Osakajo, Chuo Ward, Osaka, Japan',
                'latitude' => 34.6873,
                'longitude' => 135.5259
            ],
            [
                'day_id' => 25,
                'title' => 'Visit to Dotonbori Markets',
                'image' => 'https://res-2.cloudinary.com/jnto/image/upload/w_2064,h_1300,c_fill,f_auto,fl_lossy,q_auto/v1648006915/kyoto/H_00480_001',
                'foods' => null,
                'address' => 'Dotonbori, Chuo Ward, Osaka, Japan',
                'latitude' => 34.6687,
                'longitude' => 135.5016
            ],
            [
                'day_id' => 25,
                'title' => 'Lunch in Osaka',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local cuisine',
                'address' => 'Osaka Restaurant, 789 Dotonbori, Osaka, Japan',
                'latitude' => 34.6687,
                'longitude' => 135.5016
            ],

            // Day 8: Visita al villaggio di Shirakawa-go
            [
                'day_id' => 26,
                'title' => 'Exploration of Shirakawa-go',
                'image' => 'https://travel.rakuten.com/contents/sites/contents/files/styles/max_1300x1300/public/2023-08/shirakawago_1.jpg?itok=lXpf_XUo',
                'foods' => null,
                'address' => 'Shirakawa-go, Gifu Prefecture, Japan',
                'latitude' => 36.1341,
                'longitude' => 136.8986
            ],
            [
                'day_id' => 26,
                'title' => 'Lunch at a Local Restaurant',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Traditional cuisine',
                'address' => 'Shirakawa Restaurant, 123 Village Street, Shirakawa-go, Japan',
                'latitude' => 36.1341,
                'longitude' => 136.8986
            ],

            // Day 9: Visita al Castello di Himeji
            [
                'day_id' => 27,
                'title' => 'Excursion to Himeji Castle',
                'image' => 'https://matteoingiappone.s3.eu-central-1.amazonaws.com/wp-content/uploads/2020/03/Castello-di-Himeji-e1585668400382.jpg',
                'foods' => null,
                'address' => '68 Honmachi, Himeji, Hyogo, Japan',
                'latitude' => 34.8394,
                'longitude' => 134.6939
            ],
            [
                'day_id' => 27,
                'title' => 'Lunch in Himeji',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Japanese cuisine',
                'address' => 'Himeji Restaurant, 45 Castle Street, Himeji, Japan',
                'latitude' => 34.8394,
                'longitude' => 134.6939
            ],

            // Day 10: Ritorno
            [
                'day_id' => 28,
                'title' => 'Return to Tokyo',
                'image' => 'https://www.gotokyo.org/it/destinations/eastern-tokyo/images/area024_1000_78.jpg',
                'foods' => null,
                'address' => 'Shinjuku Granbell Hotel, 2-14-5 Shinjuku, Tokyo, Japan',
                'latitude' => 35.6928,
                'longitude' => 139.7033
            ],
            [
                'day_id' => 28,
                'title' => 'Departure from Tokyo Airport',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Narita International Airport, Narita, Chiba, Japan',
                'latitude' => 35.7767,
                'longitude' => 140.3181
            ],

            //? Crociera ai Caraibi
            // Day 1: Imbarco a Miami
            [
                'day_id' => 29,
                'title' => 'Embarkation in Miami',
                'image' => 'https://blog.cruisingjournal.com/wp-content/uploads/2021/01/miami-cruise-terminal.jpg',
                'foods' => null,
                'address' => 'Port of Miami, Miami, FL, USA',
                'latitude' => 25.7743,
                'longitude' => -80.1937
            ],
            [
                'day_id' => 29,
                'title' => 'Welcome Dinner Onboard',
                'image' => 'https://www.costacrociere.it/content/dam/costa/costa-magazine/articles-magazine/costa-smeralda/food-experience/restaurant_m.jpg.image.694.390.low.jpg',
                'foods' => 'Variety of international dishes',
                'address' => 'Cruise Ship, Port of Miami, Miami, FL, USA',
                'latitude' => 25.7743,
                'longitude' => -80.1937
            ],

            // Day 2: Navigazione verso Nassau
            [
                'day_id' => 30,
                'title' => 'Sailing to Nassau',
                'image' => 'https://www.msccrociere.it/-/media/global-contents/destinations/ports/bahamas/nassau/cruise-to-nassau-bahamas.jpg?bc=transparent&as=1&dmc=0&iar=0&mh=1395&mw=2460&sc=0&thn=0&udi=0&hash=17811B7B0A2DDA970DA119B9A0538C85',
                'foods' => null,
                'address' => 'At Sea',
                'latitude' => 25.0343,
                'longitude' => -77.3963
            ],

            // Day 3: Visita a Nassau
            [
                'day_id' => 31,
                'title' => 'Visit to Nassau',
                'image' => 'https://tempo.cdn.tambourine.com/windsong/media/bmot-islands-nassau-stay-quad-atlantis-65676e2f5d600.jpg',
                'foods' => null,
                'address' => 'Nassau, Bahamas',
                'latitude' => 25.0343,
                'longitude' => -77.3963
            ],
            [
                'day_id' => 31,
                'title' => 'Lunch in Nassau',
                'image' => 'https://images.pexels.com/photos/1579739/pexels-photo-1579739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Caribbean cuisine',
                'address' => 'Nassau Restaurant, 123 Bay Street, Nassau, Bahamas',
                'latitude' => 25.0343,
                'longitude' => -77.3963
            ],

            // Day 4: Navigazione verso Cozumel
            [
                'day_id' => 32,
                'title' => 'Sailing to Cozumel',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/409280678.jpg?k=d77928add0e666828e05c603d3e682b78fe2f55d3e42a4557c41bdc2ba6a1734&o=&hp=1',
                'foods' => null,
                'address' => 'At Sea',
                'latitude' => 22.7758,
                'longitude' => -85.1638
            ],

            // Day 5: Visita a Cozumel
            [
                'day_id' => 33,
                'title' => 'Visit to Cozumel',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/183417546.jpg?k=896c4143b4dd728c4ea0d340ba15e23f6ed1572ccb19e6a2b50a60eb3f4a4071&o=&hp=1',
                'foods' => null,
                'address' => 'Cozumel, Mexico',
                'latitude' => 20.4897,
                'longitude' => -86.9511
            ],
            [
                'day_id' => 33,
                'title' => 'Snorkeling in Cozumel',
                'image' => 'https://images.squarespace-cdn.com/content/v1/5707bd62b654f9540cad0a50/1610986066541-X8128QCFWUSS6Z5MYCOO/sea-turtle-columbia-reef-cozumel.jpg',
                'foods' => null,
                'address' => 'Snorkeling Site, Cozumel, Mexico',
                'latitude' => 20.4897,
                'longitude' => -86.9511
            ],

            // Day 6: Navigazione verso Roatán
            [
                'day_id' => 34,
                'title' => 'Sailing to Roatán',
                'image' => 'https://media.tacdn.com/media/attractions-content--1x-1/10/45/06/d1.jpg',
                'foods' => null,
                'address' => 'At Sea',
                'latitude' => 16.2800,
                'longitude' => -85.6000
            ],

            // Day 7: Visita a Roatán
            [
                'day_id' => 35,
                'title' => 'Visit to Roatán',
                'image' => 'https://www.grandroatanresortandspa.com/images/1700-960/20230907-kimpton-grand-roatan-0802e-drone-hi-res-4c94a381.jpg',
                'foods' => null,
                'address' => 'Roatán, Honduras',
                'latitude' => 16.3002,
                'longitude' => -86.5274
            ],
            [
                'day_id' => 35,
                'title' => 'Beach Relaxation in Roatán',
                'image' => 'https://i0.wp.com/passporterapp.com/it/blog/wp-content/uploads/2023/08/spiagge-in-honduras-roatan.jpg?resize=1024%2C682&ssl=1',
                'foods' => null,
                'address' => 'West Bay Beach, Roatán, Honduras',
                'latitude' => 16.2953,
                'longitude' => -86.5270
            ],

            // Day 8: Navigazione verso Miami
            [
                'day_id' => 36,
                'title' => 'Sailing to Miami',
                'image' => 'https://images5.bovpg.net/r/back/it/sale/5524def409c01o.jpg',
                'foods' => null,
                'address' => 'At Sea',
                'latitude' => 25.8000,
                'longitude' => -80.2000
            ],

            // Day 9: Relax sulla nave
            [
                'day_id' => 37,
                'title' => 'Relaxing Onboard',
                'image' => 'https://www.ncl.com/sites/default/files/700x745_HeaderImage_Escape2.jpg',
                'foods' => null,
                'address' => 'Cruise Ship, At Sea',
                'latitude' => 25.8000,
                'longitude' => -80.2000
            ],
            [
                'day_id' => 37,
                'title' => 'Gala Dinner',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Gourmet cuisine',
                'address' => 'Cruise Ship, At Sea',
                'latitude' => 25.8000,
                'longitude' => -80.2000
            ],

            // Day 10: Sbarco a Miami
            [
                'day_id' => 38,
                'title' => 'Disembarkation in Miami',
                'image' => 'https://www.miamiandbeaches.com/getmedia/f35e8173-0df2-4bed-86dc-727805570021/Miami-Aerial-Photos-Golden-Dusk-Photography-1440x900.jpg?width=1000&resizemode=force',
                'foods' => null,
                'address' => 'Port of Miami, Miami, FL, USA',
                'latitude' => 25.7743,
                'longitude' => -80.1937
            ],
            [
                'day_id' => 38,
                'title' => 'Transfer to the Airport',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Miami International Airport, Miami, FL, USA',
                'latitude' => 25.7959,
                'longitude' => -80.2870
            ],

            //? Esplorazione Islanda
            // Day 1: Arrivo a Reykjavik
            [
                'day_id' => 39,
                'title' => 'Arrival in Reykjavik',
                'image' => 'https://images.prismic.io/visiticeland/fed7e105-3226-4c2f-a764-78f5863ca6ba_reykjavik.png?auto=compress,format',
                'foods' => null,
                'address' => 'Reykjavik, Iceland',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],
            [
                'day_id' => 39,
                'title' => 'Welcome Dinner',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Icelandic specialties',
                'address' => 'Reykjavik Restaurant, 101 Reykjavik, Iceland',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],
            [
                'day_id' => 39,
                'title' => 'Evening Stroll',
                'image' => 'https://thetourguy.com/wp-content/uploads/2023/01/WTS-Reykjavik-feature-1440-675.jpg',
                'foods' => null,
                'address' => 'Laugavegur, Reykjavik, Iceland',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],

            // Day 2: Visita alla Laguna Blu
            [
                'day_id' => 40,
                'title' => 'Visit to the Blue Lagoon',
                'image' => 'https://guidetoiceland.imgix.net/352080/x/0/la-guida-completa-alla-laguna-blu-7?ixlib=php-3.3.0&w=883',
                'foods' => 'Snacks and drinks available',
                'address' => 'Blue Lagoon, 240 Grindavik, Iceland',
                'latitude' => 63.8804,
                'longitude' => -22.4495
            ],
            [
                'day_id' => 40,
                'title' => 'Lunch at the Restaurant',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/188422136.jpg?k=9e146f7c2d46989bfd712b5adf77bcbdac28bdc9c7935ce85e5f0b4c0e8834f2&o=&hp=1',
                'foods' => 'Icelandic and international cuisine',
                'address' => 'Blue Lagoon, 240 Grindavik, Iceland',
                'latitude' => 63.8804,
                'longitude' => -22.4495
            ],
            [
                'day_id' => 40,
                'title' => 'Relaxation and Spa at the Blue Lagoon',
                'image' => 'https://i.etsystatic.com/8026687/r/il/dc4060/1265078092/il_570xN.1265078092_5dtr.jpg',
                'foods' => null,
                'address' => 'Blue Lagoon, 240 Grindavik, Iceland',
                'latitude' => 63.8804,
                'longitude' => -22.4495
            ],

            // Day 3: Cascate e Geyser
            [
                'day_id' => 41,
                'title' => 'Geysir',
                'image' => 'https://images.lonelyplanetitalia.it/static/places/geysir-2166.jpg?q=90&p=2400%7C1350%7Cmax&s=2d7361a24d1d19de323ed0a879948017',
                'foods' => null,
                'address' => 'Haukadalur, Iceland',
                'latitude' => 64.3136,
                'longitude' => -20.3024
            ],
            [
                'day_id' => 41,
                'title' => 'Gullfoss Waterfall',
                'image' => 'https://www.esperienzaviaggio.it/wp-content/uploads/2023/03/Europa-Islanda-circolo-oro-cascate-Gullfoss-01.webp',
                'foods' => null,
                'address' => 'Gullfoss Waterfall, 801 Selfoss, Iceland',
                'latitude' => 64.3275,
                'longitude' => -20.1200
            ],
            [
                'day_id' => 41,
                'title' => 'Þingvellir National Park',
                'image' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/0a/2c/2a/4f.jpg',
                'foods' => null,
                'address' => 'Þingvellir, 801 Selfoss, Iceland',
                'latitude' => 64.2559,
                'longitude' => -21.1290
            ],
            [
                'day_id' => 41,
                'title' => 'Dinner at Þingvellir',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Traditional Icelandic dishes',
                'address' => 'Þingvellir Restaurant, 801 Selfoss, Iceland',
                'latitude' => 64.2559,
                'longitude' => -21.1290
            ],

            // Day 4: Esplorazione del sud
            [
                'day_id' => 42,
                'title' => 'Seljalandsfoss Waterfall',
                'image' => 'https://www.islanda.it/uploads/media/islanda-cascata-seljalandsfoss-65b8b13cb8df5958442229.jpg',
                'foods' => null,
                'address' => 'Seljalandsfoss Waterfall, 861 Hvolsvöllur, Iceland',
                'latitude' => 63.6156,
                'longitude' => -19.9926
            ],
            [
                'day_id' => 42,
                'title' => 'Skógafoss Waterfall',
                'image' => 'https://www.viaggioinislanda.it/wp-content/uploads/waterfall-in-iceland-s-Skogafoss-876x575.jpg',
                'foods' => null,
                'address' => 'Skógafoss Waterfall, 861 Skógar, Iceland',
                'latitude' => 63.5321,
                'longitude' => -19.5114
            ],
            [
                'day_id' => 42,
                'title' => 'Reynisfjara Black Sand Beach',
                'image' => 'https://www.ifrattempidellamiavita.com/wp-content/uploads/2022/03/Reynisfjara.jpg',
                'foods' => null,
                'address' => 'Reynisfjara, Vik, Iceland',
                'latitude' => 63.4064,
                'longitude' => -19.0708
            ],
            [
                'day_id' => 42,
                'title' => 'Lunch in Vik',
                'image' => 'https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local specialties',
                'address' => 'Vik Restaurant, Vik í Mýrdal, Iceland',
                'latitude' => 63.4184,
                'longitude' => -19.0064
            ],

            // Day 5: Visita alla laguna glaciale
            [
                'day_id' => 43,
                'title' => 'Jökulsárlón Glacier Lagoon',
                'image' => 'https://arcticshorex.com/wp-content/uploads/2020/07/Jokulsarlon-Glacial-Lagoon-5-1024x576.jpg',
                'foods' => null,
                'address' => 'Jökulsárlón, 781 Höfn, Iceland',
                'latitude' => 64.0481,
                'longitude' => -16.1791
            ],
            [
                'day_id' => 43,
                'title' => 'Boat Tour Among the Icebergs',
                'image' => 'https://www.viaggioinislanda.it/wp-content/uploads/attraversamento-della-laguna.jpg',
                'foods' => null,
                'address' => 'Jökulsárlón Glacier Lagoon, 781 Höfn, Iceland',
                'latitude' => 64.0481,
                'longitude' => -16.1791
            ],
            [
                'day_id' => 43,
                'title' => 'Diamond Beach',
                'image' => 'https://difotoediviaggi.it/images/foto-articoli/islanda-diamond-beac/diamond-spiaggia-islanda.webp',
                'foods' => null,
                'address' => 'Diamond Beach, Höfn, Iceland',
                'latitude' => 64.0444,
                'longitude' => -16.1824
            ],

            // Day 6: Escursione sui ghiacciai
            [
                'day_id' => 44,
                'title' => 'Glacier Hike',
                'image' => 'https://www.eleonoraongaro.it/wp-content/uploads/2021/02/Tour-nelle-Ice-Caves-in-Islanda-1030x687.jpg',
                'foods' => null,
                'address' => 'Vatnajökull Glacier, Iceland',
                'latitude' => 64.1342,
                'longitude' => -16.9830
            ],
            [
                'day_id' => 44,
                'title' => 'Visit to the Ice Cave',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/56/70/39/caption.jpg?w=1200&h=-1&s=1',
                'foods' => null,
                'address' => 'Ice Cave, Vatnajökull, Iceland',
                'latitude' => 64.1342,
                'longitude' => -16.9830
            ],
            [
                'day_id' => 44,
                'title' => 'Northern Lights',
                'image' => 'https://www.ilviaggiatore-magazine.it/wp-content/uploads/2022/11/AdobeStock_539954995-ACQUISTATA-RIDOTTA.jpg',
                'foods' => null,
                'address' => 'Northern Lights Viewing Spot, Iceland',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],

            // Day 7: Visita alla Penisola di Snæfellsnes
            [
                'day_id' => 45,
                'title' => 'Snæfellsnes Peninsula',
                'image' => 'https://viaggiadipiu.it/wp-content/uploads/2021/10/IMG_8636-e1635530130806.jpg',
                'foods' => null,
                'address' => 'Snæfellsnes Peninsula, Iceland',
                'latitude' => 64.9193,
                'longitude' => -23.7746
            ],
            [
                'day_id' => 45,
                'title' => 'Arnarstapi Waterfall',
                'image' => 'https://media.istockphoto.com/id/1466706569/it/foto/cascate-sulla-spiaggia-di-arnarstapi.jpg?s=612x612&w=0&k=20&c=E7srNoVzEIt3wzS7rYxENJS32pxvbPhFZe2UEUk2J2A=',
                'foods' => null,
                'address' => 'Arnarstapi, 356 Snæfellsbær, Iceland',
                'latitude' => 64.7662,
                'longitude' => -23.6226
            ],
            [
                'day_id' => 45,
                'title' => 'Snæfellsjökull National Park',
                'image' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/6c/33/4e.jpg',
                'foods' => null,
                'address' => 'Snæfellsjökull National Park, Iceland',
                'latitude' => 64.7514,
                'longitude' => -23.7587
            ],

            // Day 8: Esplorazione del nord
            [
                'day_id' => 46,
                'title' => 'Visit to Akureyri',
                'image' => 'https://www.akureyriguide.is/wp-content/uploads/2020/02/DJI_0038-1-1024x767.jpg',
                'foods' => null,
                'address' => 'Akureyri, Iceland',
                'latitude' => 65.6831,
                'longitude' => -18.1106
            ],
            [
                'day_id' => 46,
                'title' => 'Visit to Myvatn',
                'image' => 'https://www.guidetoiceland.is/img/640/4196/233580.jpg',
                'foods' => null,
                'address' => 'Lake Mývatn, Iceland',
                'latitude' => 65.6408,
                'longitude' => -17.0067
            ],
            [
                'day_id' => 46,
                'title' => 'Visit to Húsavík',
                'image' => 'https://media.istockphoto.com/id/1179111374/photo/husavik.jpg?s=612x612&w=0&k=20&c=fl8Dw9uA-nwF4_fjeebsytWwx5xVbcMhszDZgGACDQQ=',
                'foods' => null,
                'address' => 'Húsavík, Iceland',
                'latitude' => 66.0424,
                'longitude' => -17.3381
            ],

            // Day 9: Giornata di relax
            [
                'day_id' => 47,
                'title' => 'Visit to Reykjavík',
                'image' => 'https://media.istockphoto.com/id/1489366241/photo/sunset-over-reykjavik.jpg?s=612x612&w=0&k=20&c=rb7nWyuHM5yZpNxHnHkIS9GJPfpwBIZFLv0VvFD3dVA=',
                'foods' => null,
                'address' => 'Reykjavík, Iceland',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],
            [
                'day_id' => 47,
                'title' => 'Departure',
                'image' => 'https://media.istockphoto.com/id/958557178/photo/plane-takeoff.jpg?s=612x612&w=0&k=20&c=uq0XfcS5bJJgC55uRUX7paBdp3g5RvLeGkwZ6gr-j8=',
                'foods' => null,
                'address' => 'Keflavík International Airport, Iceland',
                'latitude' => 64.0136,
                'longitude' => -22.5671
            ],
            [
                'day_id' => 47,
                'title' => 'National Museum of Iceland',
                'image' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/95/1d/ba.jpg',
                'foods' => null,
                'address' => 'National Museum of Iceland, Reykjavik, Iceland',
                'latitude' => 64.1428,
                'longitude' => -21.9223
            ],

            // Day 10: Ritorno
            [
                'day_id' => 48,
                'title' => 'Return Home',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Keflavik Airport, Iceland',
                'latitude' => 63.9850,
                'longitude' => -22.6056
            ],

            //? Giro della Toscana 
            // Day 1: Arrivo a Firenze
            [
                'day_id' => 49,
                'title' => 'Arrival in Florence',
                'image' => 'https://tourismmedia.italia.it/is/image/mitur/20210401173629-firenze-toscana-gettyimages-1145040590?wid=1600&hei=900&fit=constrain,1&fmt=webp',
                'foods' => null,
                'address' => 'Hotel Firenze, Piazza della Signoria, 50122 Florence FI, Italy',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],
            [
                'day_id' => 49,
                'title' => 'Welcome Dinner',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Typical Tuscan Cuisine',
                'address' => 'Restaurant Firenze, Via della Vigna Nuova, 50123 Florence FI, Italy',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],
            [
                'day_id' => 49,
                'title' => 'Evening Walk',
                'image' => 'https://d3evrc0h48esvv.cloudfront.net//7448058/iStock-857440936.jpg?w=1440&h=1039&q=60&fm=jpg&t=1694438347542',
                'foods' => null,
                'address' => 'Piazza della Signoria, 50122 Florence FI, Italy',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],

            // Day 2: Visita di Firenze
            [
                'day_id' => 50,
                'title' => 'Visit to the Florence Cathedral',
                'image' => 'https://www.shutterstock.com/image-photo/aerial-view-florence-cathedral-duomo-600nw-2373587937.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 50122 Florence FI, Italy',
                'latitude' => 43.7731,
                'longitude' => 11.2559
            ],
            [
                'day_id' => 50,
                'title' => 'Uffizi Gallery',
                'image' => 'https://www.toscana.info/wp-content/uploads/sites/123/firenze-uffizi-galleria-hd.jpg',
                'foods' => null,
                'address' => 'Piazzale degli Uffizi, 50122 Florence FI, Italy',
                'latitude' => 43.7666,
                'longitude' => 11.2556
            ],
            [
                'day_id' => 50,
                'title' => 'Stroll along the Arno',
                'image' => 'https://live.staticflickr.com/5217/5411852662_42bdbfa01d_b.jpg',
                'foods' => null,
                'address' => 'Ponte Vecchio, 50125 Florence FI, Italy',
                'latitude' => 43.7678,
                'longitude' => 11.2536
            ],
            [
                'day_id' => 50,
                'title' => 'Lunch in Florence',
                'image' => 'https://latavernadelconte.com/wp-content/uploads/2022/04/ristorante-tipico-abruzzese-5.jpeg',
                'foods' => 'Typical Florentine Dishes',
                'address' => 'Restaurant Firenze, Via dei Calzaiuoli, 50122 Florence FI, Italy',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],

            // Day 3: Esplorazione di Siena
            [
                'day_id' => 51,
                'title' => 'Piazza del Campo',
                'image' => 'https://www.10cose.it/wp-content/uploads/2016/04/piazza-del-campo-siena-nove-spicchi.jpg',
                'foods' => null,
                'address' => 'Piazza del Campo, 53100 Siena SI, Italy',
                'latitude' => 43.3187,
                'longitude' => 11.3304
            ],
            [
                'day_id' => 51,
                'title' => 'Siena Cathedral',
                'image' => 'https://www.villadisotto.it/wp-content/uploads/2020/06/Duomo_di_Siena-dintorni.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 53100 Siena SI, Italy',
                'latitude' => 43.3187,
                'longitude' => 11.3305
            ],
            [
                'day_id' => 51,
                'title' => 'Lunch in Siena',
                'image' => 'https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Sienese Specialties',
                'address' => 'Restaurant Siena, Piazza del Campo, 53100 Siena SI, Italy',
                'latitude' => 43.3187,
                'longitude' => 11.3304
            ],
            [
                'day_id' => 51,
                'title' => 'Visit to the Opera Museum',
                'image' => 'https://toscanasecrets.com/wp-content/uploads/2024/02/duomo-siena-museo-opera-toscana-secrets-26.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 53100 Siena SI, Italy',
                'latitude' => 43.3187,
                'longitude' => 11.3305
            ],

            // Day 4: Tour delle colline del Chianti
            [
                'day_id' => 52,
                'title' => 'Chianti Wine Tasting',
                'image' => 'https://www.winedering.com/uploads/travels/4749/thumb/tenutacasenuovedegustazionephstefanocasati03946.jpg.webp',
                'foods' => 'Local Wines and Cheeses',
                'address' => 'Chianti, Tuscany, Italy',
                'latitude' => 43.4371,
                'longitude' => 11.3284
            ],
            [
                'day_id' => 52,
                'title' => 'Visit to a Local Winery',
                'image' => 'https://podereigiganti.it/wp-content/uploads/2018/06/catine-in-toscana-cantina-petra-di-suvereto.jpg',
                'foods' => 'Lunch with Local Products',
                'address' => 'Chianti Winery, Tuscany, Italy',
                'latitude' => 43.4371,
                'longitude' => 11.3284
            ],
            [
                'day_id' => 52,
                'title' => 'Walk Among the Vineyards',
                'image' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/11/a9/28/2a.jpg',
                'foods' => null,
                'address' => 'Chianti, Tuscany, Italy',
                'latitude' => 43.4371,
                'longitude' => 11.3284
            ],

            // Day 5: Visita a Pisa
            [
                'day_id' => 53,
                'title' => 'Leaning Tower of Pisa',
                'image' => 'https://www.tuscanypeople.com/wp-content/uploads/2016/03/torre_di_pisa.jpg',
                'foods' => null,
                'address' => 'Piazza dei Miracoli, 56126 Pisa PI, Italy',
                'latitude' => 43.7228,
                'longitude' => 10.3966
            ],
            [
                'day_id' => 53,
                'title' => 'Piazza dei Miracoli',
                'image' => 'https://tourismmedia.italia.it/is/image/mitur/20210310174409-shutterstock-353262566?wid=800&hei=500&fit=constrain,1&fmt=webp',
                'foods' => null,
                'address' => 'Piazza dei Miracoli, 56126 Pisa PI, Italy',
                'latitude' => 43.7228,
                'longitude' => 10.3966
            ],
            [
                'day_id' => 53,
                'title' => 'Lunch in Pisa',
                'image' => 'https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Tuscan Cuisine',
                'address' => 'Restaurant Pisa, Via dei Mille, 56125 Pisa PI, Italy',
                'latitude' => 43.7228,
                'longitude' => 10.3966
            ],

            // Day 6: Visita a Lucca
            [
                'day_id' => 54,
                'title' => 'Departure from Florence',
                'image' => 'https://images.pexels.com/photos/3415648/pexels-photo-3415648.jpeg?auto=compress&cs=tinysrgb&w=800',
                'foods' => null,
                'address' => 'Florence Airport, Italy',
                'latitude' => 43.8100,
                'longitude' => 11.2042
            ],
            [
                'day_id' => 54,
                'title' => 'Visit to Lucca’s Historic Center',
                'image' => 'https://www.edreams.it/blog/wp-content/uploads/sites/7/2021/01/shutterstock_1257185803.jpg',
                'foods' => null,
                'address' => 'Centro Storico Lucca, 55100 Lucca LU, Italy',
                'latitude' => 43.8438,
                'longitude' => 10.5075
            ],
            [
                'day_id' => 54,
                'title' => 'Lunch in Lucca',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Lucchese Specialties',
                'address' => 'Restaurant Lucca, Piazza San Michele, 55100 Lucca LU, Italy',
                'latitude' => 43.8438,
                'longitude' => 10.5075
            ],

            // Day 7: Gita a San Gimignano
            [
                'day_id' => 55,
                'title' => 'Medieval Village of San Gimignano',
                'image' => 'https://media.e-borghi.com/public/borghi/04_12_18-12_22_55-s11d7392a039a5e71f95ebf992e68949.jpg',
                'foods' => null,
                'address' => 'San Gimignano, 53037 Siena SI, Italy',
                'latitude' => 43.4671,
                'longitude' => 11.3298
            ],
            [
                'day_id' => 55,
                'title' => 'Collegiata of San Gimignano',
                'image' => 'https://www.lanostra.it/wp-content/uploads/2017/08/duomo-san-gimignano-basilica-santa-maria-assunta.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 53037 San Gimignano SI, Italy',
                'latitude' => 43.4671,
                'longitude' => 11.3298
            ],
            [
                'day_id' => 55,
                'title' => 'Lunch in San Gimignano',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Tuscan Cuisine',
                'address' => 'Restaurant San Gimignano, Piazza della Cisterna, 53037 San Gimignano SI, Italy',
                'latitude' => 43.4671,
                'longitude' => 11.3298
            ],

            // Day 8: Ritorno
            [
                'day_id' => 56,
                'title' => 'Return to Florence',
                'image' => 'https://www.itabus.it/on/demandware.static/-/Sites-ITABUS-Library/default/dw979783bf/Destinazioni/Firenze/florence-or-firenze-sunset-aerial-cityscape-tuscan-PWYT8CR.jpg',
                'foods' => null,
                'address' => 'Hotel Firenze, Piazza della Signoria, 50122 Florence FI, Italy',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],
            [
                'day_id' => 56,
                'title' => 'Preparation for Departure',
                'image' => 'https://img.grouponcdn.com/deal/36vM1vDUTwZBGVY82Xsvyo7VrKkS/36-1500x900/v1/t600x362.jpg',
                'foods' => null,
                'address' => 'Hotel Firenze, Piazza della Signoria, 50122 Florence FI, Italy',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],
            [
                'day_id' => 56,
                'title' => 'Departure',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Florence Airport, Via del Termine, 50127 Florence FI, Italy',
                'latitude' => 43.8104,
                'longitude' => 11.2053
            ],

            //? Weekend a Londra
            // Day 1: Arrivo a Londra
            [
                'day_id' => 57,
                'title' => 'Arrival in London',
                'image' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2017/03/unnamed1.jpg?v=1490116447',
                'foods' => null,
                'address' => 'Hotel London, 123 Baker Street, London NW1 6XE, UK',
                'latitude' => 51.5236,
                'longitude' => -0.1587
            ],
            [
                'day_id' => 57,
                'title' => 'Welcome Dinner',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'British Cuisine',
                'address' => 'The Ivy, 1-5 West Street, London WC2H 9NQ, UK',
                'latitude' => 51.5145,
                'longitude' => -0.1270
            ],
            [
                'day_id' => 57,
                'title' => 'Evening Walk',
                'image' => 'https://statics.cedscdn.it/photos/MED_HIGH/81/85/7798185_05110415_tower_bridge_foto_di_visitbritain_moumita_paul_.jpg',
                'foods' => null,
                'address' => 'Trafalgar Square, London WC2N 5DN, UK',
                'latitude' => 51.5080,
                'longitude' => -0.1281
            ],

            // Day 2: Visita di Londra
            [
                'day_id' => 58,
                'title' => 'Buckingham Palace',
                'image' => 'https://cdn.londonandpartners.com/asset/buckingham-palace_image-courtesy-of-royal-collection-trust-his-majesty-king-charles-iii-2022-photo-andrew-holt_247a2afaed0312ad4e8fb6142fdcdd5a.jpg',
                'foods' => null,
                'address' => 'Buckingham Palace, London SW1A 1AA, UK',
                'latitude' => 51.5014,
                'longitude' => -0.1419
            ],
            [
                'day_id' => 58,
                'title' => 'Big Ben',
                'image' => 'https://as2.ftcdn.net/v2/jpg/01/35/61/33/1000_F_135613354_mBHFo7PIVm6hu7iMHy8IoE0WuCRcoe1Q.jpg',
                'foods' => null,
                'address' => 'Big Ben, Westminster, London SW1A 0AA, UK',
                'latitude' => 51.5007,
                'longitude' => -0.1246
            ],
            [
                'day_id' => 58,
                'title' => 'Westminster Abbey',
                'image' => 'https://cdn.londonandpartners.com/asset/westminster-abbey_westminster-abbey-copyright-shutterstock-image-courtesy-of-shutterstock_9ac64ccf26eadb50669d288736e98f65.jpg',
                'foods' => null,
                'address' => '20 Deans Yard, Westminster, London SW1P 3PA, UK',
                'latitude' => 51.4993,
                'longitude' => -0.1273
            ],
            [
                'day_id' => 58,
                'title' => 'Lunch in Central London',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'British and International Cuisine',
                'address' => 'Dishoom Covent Garden, 12 Upper St Martin\'s Lane, London WC2H 9FB, UK',
                'latitude' => 51.5122,
                'longitude' => -0.1262
            ],

            // Day 3: Visita ai musei
            [
                'day_id' => 59,
                'title' => 'British Museum',
                'image' => 'https://cdn.londonandpartners.com/asset/british-museum_museum-frontage-image-courtesy-of-the-british-museum_f0b0a5a3c53f8fc1564868c561bd167c.jpg',
                'foods' => null,
                'address' => 'Great Russell Street, London WC1B 3DG, UK',
                'latitude' => 51.5194,
                'longitude' => -0.1270
            ],
            [
                'day_id' => 59,
                'title' => 'National Gallery',
                'image' => 'https://cdn.londonandpartners.com/asset/the-national-gallery-official-highlights-tour-with-afternoon-tea_the-national-gallery-trafalgar-square-image-courtesy-of-red-letter-days_74db53169a8ea6b23e3b67c0c2de6e6b.jpg',
                'foods' => null,
                'address' => 'Trafalgar Square, London WC2N 5DN, UK',
                'latitude' => 51.5080,
                'longitude' => -0.1281
            ],
            [
                'day_id' => 59,
                'title' => 'Lunch Near the Museums',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'British and Continental Cuisine',
                'address' => 'The Great Court Restaurant, British Museum, Great Russell Street, London WC1B 3DG, UK',
                'latitude' => 51.5194,
                'longitude' => -0.1270
            ],
            [
                'day_id' => 59,
                'title' => 'Walk in Covent Garden',
                'image' => 'https://image-tc.galaxy.tf/wijpeg-5as3kpt2zbbzzygipb2j4dndx/covent-garden_wide.jpg?crop=0%2C51%2C980%2C551',
                'foods' => null,
                'address' => 'Covent Garden, London WC2E 8RF, UK',
                'latitude' => 51.5123,
                'longitude' => -0.1228
            ],

            // Day 4: Ritorno
            [
                'day_id' => 60,
                'title' => 'Final Tour in London',
                'image' => 'https://www.mirygiramondo.com/wp-content/uploads/2021/08/londra-tower-bridge.jpg',
                'foods' => null,
                'address' => 'Hotel London, 123 Baker Street, London NW1 6XE, UK',
                'latitude' => 51.5236,
                'longitude' => -0.1587
            ],
            [
                'day_id' => 60,
                'title' => 'Preparation for Departure',
                'image' => 'https://www.terravision.eu/italiano/files/2015/09/gatwick1.jpg',
                'foods' => null,
                'address' => 'Hotel London, 123 Baker Street, London NW1 6XE, UK',
                'latitude' => 51.5236,
                'longitude' => -0.1587
            ],
            [
                'day_id' => 60,
                'title' => 'Departure',
                'image' => 'https://www.aeroporto.net/wp-content/uploads/sites/3/london-heatrow-large.jpg',
                'foods' => null,
                'address' => 'Heathrow Airport, Longford, London TW6 1QG, UK',
                'latitude' => 51.4700,
                'longitude' => -0.4543
            ],

            //? Visita a New York
            // Day 1: Arrivo a New York
            [
                'day_id' => 61,
                'title' => 'Arrival in New York',
                'image' => 'https://as1.ftcdn.net/v2/jpg/01/90/16/22/1000_F_190162235_kht4YkbpXqlBa2bnUB2qlWbvcZfH6t0g.jpg',
                'foods' => null,
                'address' => 'Hotel New York, 350 W 42nd St, New York, NY 10036, USA',
                'latitude' => 40.7580,
                'longitude' => -73.9855
            ],
            [
                'day_id' => 61,
                'title' => 'Welcome Dinner',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'American Cuisine',
                'address' => 'Carmine\'s Italian Restaurant, 200 W 44th St, New York, NY 10036, USA',
                'latitude' => 40.7589,
                'longitude' => -73.9860
            ],

            // Day 2: Visita della città
            [
                'day_id' => 62,
                'title' => 'Times Square',
                'image' => 'https://modulo.net/files/chunks/59005e8c0fc46eee718b4567/5a1d5910a0d55665320000af.jpg',
                'foods' => null,
                'address' => 'Times Square, New York, NY 10036, USA',
                'latitude' => 40.7580,
                'longitude' => -73.9855
            ],
            [
                'day_id' => 62,
                'title' => 'Central Park',
                'image' => 'https://media-assets.vanityfair.it/photos/614c6c0df77dece145864309/1:1/w_858,h_858,c_limit/PPPP3.jpg',
                'foods' => null,
                'address' => 'Central Park, New York, NY, USA',
                'latitude' => 40.7851,
                'longitude' => -73.9683
            ],
            [
                'day_id' => 62,
                'title' => 'Lunch in Midtown',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'International Cuisine',
                'address' => 'The Modern, 9 W 53rd St, New York, NY 10019, USA',
                'latitude' => 40.7614,
                'longitude' => -73.9776
            ],

            // Day 3: Statua della Libertà
            [
                'day_id' => 63,
                'title' => 'Statue of Liberty',
                'image' => 'https://www.veganiinviaggio.it/wp-content/uploads/2019/09/New_York_2018_0919.jpg',
                'foods' => null,
                'address' => 'Liberty Island, New York, NY 10004, USA',
                'latitude' => 40.6892,
                'longitude' => -74.0445
            ],
            [
                'day_id' => 63,
                'title' => 'Ellis Island',
                'image' => 'https://cdn.britannica.com/79/82679-050-CA3D3DAD/Ellis-Island.jpg',
                'foods' => null,
                'address' => 'Ellis Island, New York, NY 10004, USA',
                'latitude' => 40.6992,
                'longitude' => -74.0390
            ],
            [
                'day_id' => 63,
                'title' => 'Lunch in Battery Park',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'American Cuisine',
                'address' => 'Pier A Harbor House, 22 Battery Pl, New York, NY 10004, USA',
                'latitude' => 40.7074,
                'longitude' => -74.0167
            ],

            // Day 4: Musei e gallerie
            [
                'day_id' => 64,
                'title' => 'Museum of Modern Art (MoMA)',
                'image' => 'https://artemagazine.it/wp-content/uploads/2023/09/museum-of-modern-art.jpg',
                'foods' => null,
                'address' => '11 W 53rd St, New York, NY 10019, USA',
                'latitude' => 40.7614,
                'longitude' => -73.9776
            ],
            [
                'day_id' => 64,
                'title' => 'American Museum of Natural History',
                'image' => 'https://images.ctfassets.net/1aemqu6a6t65/tdFipJ0KZRG5akApGp1Hc/045886467aed32470eb2777435b0b33d/American-_Museum-of-Natural-History-Manhattan-NYC-Photo-Alvaro-Keding-02.jpg',
                'foods' => null,
                'address' => '200 Central Park West, New York, NY 10024, USA',
                'latitude' => 40.7813,
                'longitude' => -73.9733
            ],
            [
                'day_id' => 64,
                'title' => 'Lunch in Upper West Side',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'International Cuisine',
                'address' => 'The Smith, 1900 Broadway, New York, NY 10023, USA',
                'latitude' => 40.7794,
                'longitude' => -73.9811
            ],

            // Day 5: Tour di Brooklyn
            [
                'day_id' => 65,
                'title' => 'Brooklyn Bridge',
                'image' => 'https://images.photowall.com/products/61553/brooklyn-bridge-view.jpg?h=699&q=85',
                'foods' => null,
                'address' => 'Brooklyn Bridge, New York, NY, USA',
                'latitude' => 40.7061,
                'longitude' => -73.9969
            ],
            [
                'day_id' => 65,
                'title' => 'Dumbo',
                'image' => 'https://torlytravels.com/wp-content/uploads/2016/09/IMG_2162.jpeg',
                'foods' => null,
                'address' => 'DUMBO, Brooklyn, NY 11201, USA',
                'latitude' => 40.7040,
                'longitude' => -73.9903
            ],
            [
                'day_id' => 65,
                'title' => 'Lunch in Brooklyn',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'American and International Cuisine',
                'address' => 'Juliana\'s Pizza, 19 Old Fulton St, Brooklyn, NY 11201, USA',
                'latitude' => 40.7039,
                'longitude' => -73.9944
            ],

            // Day 6: Visita a Harlem
            [
                'day_id' => 66,
                'title' => 'Exploration of Harlem',
                'image' => 'https://esd.ny.gov/sites/default/files/hero/HCDC_Hero2.jpg',
                'foods' => null,
                'address' => 'Harlem, New York, NY, USA',
                'latitude' => 40.8116,
                'longitude' => -73.9465
            ],
            [
                'day_id' => 66,
                'title' => 'Gospel Tour',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0b/e2/5b/54/chiesa-abc.jpg?w=1200&h=-1&s=1',
                'foods' => null,
                'address' => 'Abyssinian Baptist Church, 132 Odell Clark Pl, New York, NY 10030, USA',
                'latitude' => 40.8136,
                'longitude' => -73.9465
            ],
            [
                'day_id' => 66,
                'title' => 'Lunch in Harlem',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Soul Food',
                'address' => 'Sylvia\'s, 328 Malcolm X Blvd, New York, NY 10027, USA',
                'latitude' => 40.8115,
                'longitude' => -73.9497
            ],

            // Day 7: Shopping sulla Fifth Avenue
            [
                'day_id' => 67,
                'title' => 'Fifth Avenue',
                'image' => 'https://hips.hearstapps.com/hmg-prod/images/new-york-skyline-with-broadway-fifth-avenue-and-royalty-free-image-1684148492.jpg',
                'foods' => null,
                'address' => 'Fifth Avenue, New York, NY, USA',
                'latitude' => 40.7736,
                'longitude' => -73.9654
            ],
            [
                'day_id' => 67,
                'title' => 'Shopping at Saks Fifth Avenue',
                'image' => 'https://www.hollywoodreporter.com/wp-content/uploads/2024/02/Saks-Fifth-Avenue-Beverly-Hills_Main-Floor-Entrance-H-2024.jpg?w=1296&h=730&crop=1',
                'foods' => null,
                'address' => '611 5th Ave, New York, NY 10022, USA',
                'latitude' => 40.7590,
                'longitude' => -73.9763
            ],
            [
                'day_id' => 67,
                'title' => 'Lunch in Midtown',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'International Cuisine',
                'address' => 'Le Bernardin, 155 W 51st St, New York, NY 10019, USA',
                'latitude' => 40.7616,
                'longitude' => -73.9825
            ],

            // Day 8: Ritorno
            [
                'day_id' => 68,
                'title' => 'Last Hours in New York',
                'image' => 'https://www.civitatis.com/blog/wp-content/uploads/2023/03/miradores-nueva-york.jpg',
                'foods' => null,
                'address' => 'Hotel New York, 350 W 42nd St, New York, NY 10036, USA',
                'latitude' => 40.7580,
                'longitude' => -73.9855
            ],
            [
                'day_id' => 68,
                'title' => 'Departure Preparations',
                'image' => 'https://www.civitatis.com/blog/wp-content/uploads/2023/03/miradores-nueva-york.jpg',
                'foods' => null,
                'address' => 'Hotel New York, 350 W 42nd St, New York, NY 10036, USA',
                'latitude' => 40.7580,
                'longitude' => -73.9855
            ],
            [
                'day_id' => 68,
                'title' => 'Departure',
                'image' => 'https://www.civitatis.com/blog/wp-content/uploads/2023/03/miradores-nueva-york.jpg',
                'foods' => null,
                'address' => 'John F. Kennedy International Airport, Queens, NY 11430, USA',
                'latitude' => 40.6413,
                'longitude' => -73.7781
            ],

            //? Avventura in Australia
            // Day 1: Arrivo a Sydney
            [
                'day_id' => 69,
                'title' => 'Arrival in Sydney',
                'image' => 'https://static.independent.co.uk/2024/03/20/17/newFile.jpg',
                'foods' => null,
                'address' => 'Hotel Sydney, 123 George St, Sydney NSW 2000, Australia',
                'latitude' => -33.8688,
                'longitude' => 151.2093
            ],

            // Day 2: Visita di Sydney
            [
                'day_id' => 70,
                'title' => 'Sydney Opera House',
                'image' => 'https://cdn.asp.events/CLIENT_Oliver_K_15A4C8AE_5056_B739_54CFDE58102DEF33/sites/sydney-build-2024/media/libraries/sydney-build-blog/Sydney%20Opera%20House%20image.png',
                'foods' => null,
                'address' => 'Bennelong Point, Sydney NSW 2000, Australia',
                'latitude' => -33.8568,
                'longitude' => 151.2153
            ],
            [
                'day_id' => 70,
                'title' => 'Sydney Harbour Bridge',
                'image' => 'https://www.ansto.gov.au/sites/default/files/styles/hero_image_2z/public/hero-images/istock-Sydney-HarbourBridge-406090100.jpg?h=4d485623&itok=fGWHlGTD',
                'foods' => null,
                'address' => 'Sydney NSW 2060, Australia',
                'latitude' => -33.8486,
                'longitude' => 151.2108
            ],
            [
                'day_id' => 70,
                'title' => 'Lunch at Circular Quay',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'International Cuisine',
                'address' => 'Opera Bar, Bennelong Point, Sydney NSW 2000, Australia',
                'latitude' => -33.8568,
                'longitude' => 151.2153
            ],

            // Day 3: Gita alle Blue Mountains
            [
                'day_id' => 71,
                'title' => 'Blue Mountains',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/23/fd/e5/caption.jpg?w=1200&h=-1&s=1&cx=1920&cy=1080&chk=v1_02ae2c1193d0340624c4',
                'foods' => null,
                'address' => 'Blue Mountains, NSW, Australia',
                'latitude' => -33.7131,
                'longitude' => 150.3110
            ],
            [
                'day_id' => 71,
                'title' => 'Echo Point',
                'image' => 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/532000/532084-echo-point-lookout.jpg',
                'foods' => null,
                'address' => 'Echo Point Lookout, Katoomba NSW 2780, Australia',
                'latitude' => -33.7244,
                'longitude' => 150.3119
            ],
            [
                'day_id' => 71,
                'title' => 'Lunch in Katoomba',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Australian Cuisine',
                'address' => 'The Yellow Deli, 226 Katoomba St, Katoomba NSW 2780, Australia',
                'latitude' => -33.7318,
                'longitude' => 150.3121
            ],

            // Day 4: Visita alla Grande Barriera Corallina
            [
                'day_id' => 72,
                'title' => 'Great Barrier Reef',
                'image' => 'https://greatbarrierreef.org/wp-content/uploads/2022/06/Lady-Musgrave-Island-Great-Barrier-Reef.jpg',
                'foods' => null,
                'address' => 'Great Barrier Reef, QLD, Australia',
                'latitude' => -18.2871,
                'longitude' => 147.6992
            ],
            [
                'day_id' => 72,
                'title' => 'Snorkeling at the Reef',
                'image' => 'https://www.torntackies.com/wp-content/uploads/2022/08/Great-Barrier-Reef-diving.jpg',
                'foods' => null,
                'address' => 'Great Barrier Reef, QLD, Australia',
                'latitude' => -18.2871,
                'longitude' => 147.6992
            ],
            [
                'day_id' => 72,
                'title' => 'Lunch in Cairns',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local Cuisine',
                'address' => 'Salt House, 6/2 Pier Point Rd, Cairns City QLD 4870, Australia',
                'latitude' => -16.9204,
                'longitude' => 145.7700
            ],

            // Day 5: Esplorazione di Cairns
            [
                'day_id' => 73,
                'title' => 'Daintree Rainforest',
                'image' => 'https://www.roadaffair.com/wp-content/uploads/2017/12/daintree-national-park-australia-shutterstock_341458328.jpg',
                'foods' => null,
                'address' => 'Daintree Rainforest, QLD, Australia',
                'latitude' => -16.1805,
                'longitude' => 145.3850
            ],
            [
                'day_id' => 73,
                'title' => 'Mossman Gorge',
                'image' => 'https://cdn.sightseeingtoursaustralia.com.au/wp-content/uploads/2022/04/Mossman-Gorge-18.jpg',
                'foods' => null,
                'address' => 'Mossman Gorge Rd, Mossman QLD 4873, Australia',
                'latitude' => -16.3398,
                'longitude' => 145.3346
            ],
            [
                'day_id' => 73,
                'title' => 'Lunch in Cairns',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Australian Cuisine',
                'address' => 'The Reef Hotel Casino, 35-41 Wharf St, Cairns City QLD 4870, Australia',
                'latitude' => -16.9200,
                'longitude' => 145.7737
            ],

            // Day 6: Gita a Uluru
            [
                'day_id' => 74,
                'title' => 'Uluru',
                'image' => 'https://cdn.kimkim.com/files/a/images/3367c083fb3cf5cbef95d3d6919ac9150bdb0e04/big-ddd64aae2f06ff9db9a66c9dde95a46e.jpg',
                'foods' => null,
                'address' => 'Uluru-Kata Tjuta National Park, NT, Australia',
                'latitude' => -25.3444,
                'longitude' => 131.0369
            ],
            [
                'day_id' => 74,
                'title' => 'Kata Tjuta',
                'image' => 'https://uluru-australia.com/wp-content/uploads/2022/01/Kata-Tjuta-1.jpg',
                'foods' => null,
                'address' => 'Kata Tjuta, NT, Australia',
                'latitude' => -25.3574,
                'longitude' => 131.0449
            ],
            [
                'day_id' => 74,
                'title' => 'Lunch at the Resort',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Australian Cuisine',
                'address' => 'Sails in the Desert, Yulara Dr, Yulara NT 0872, Australia',
                'latitude' => -25.2422,
                'longitude' => 130.9823
            ],

            // Day 7: Visita a Melbourne
            [
                'day_id' => 75,
                'title' => 'Melbourne Art Districts',
                'image' => 'https://media.timeout.com/images/105748996/image.jpg',
                'foods' => null,
                'address' => 'Fitzroy, Melbourne VIC 3065, Australia',
                'latitude' => -37.8009,
                'longitude' => 144.9804
            ],
            [
                'day_id' => 75,
                'title' => 'Great Ocean Road',
                'image' => 'https://it.visitmelbourne.com/-/media/images/great-ocean-road/things-to-do/nature-and-wildlife/beaches-and-coastlines/twelve-apostles/12-apostles_gor_u_1224113_1150x863.jpg?ts=20150625371042',
                'foods' => null,
                'address' => 'Great Ocean Road, VIC, Australia',
                'latitude' => -38.5827,
                'longitude' => 143.7618
            ],
            [
                'day_id' => 75,
                'title' => 'Lunch in Melbourne',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'International Cuisine',
                'address' => 'Chin Chin, 125 Flinders Ln, Melbourne VIC 3000, Australia',
                'latitude' => -37.8180,
                'longitude' => 144.9671
            ],

            // Day 8: Esplorazione della Tasmania
            [
                'day_id' => 76,
                'title' => 'Tasmanian National Parks',
                'image' => 'https://www.travelmarvel.com.au/-/media/travelmarvel-responsive-website/australia/tasmania/hero-image-12-5/hc-t-au-tas-freycinet-national-park-wineglass-bay-13283524-d-web-12-5.jpg?useCustomFunctions=1&rw=2280&w=1900&h=950&cropX=190&cropY=0',
                'foods' => null,
                'address' => 'Tasmania, Australia',
                'latitude' => -42.0408,
                'longitude' => 147.4330
            ],
            [
                'day_id' => 76,
                'title' => 'Freycinet National Park',
                'image' => 'https://s3.tasmania.com/website/wp-content/uploads/2018/03/11234845/Wineglass-Bay-Cruises-Tourism-Tasmania-Supplied-Courtesy-of-Wineglass-Bay-Cruises-128210.jpg',
                'foods' => null,
                'address' => 'Freycinet National Park, TAS, Australia',
                'latitude' => -42.1741,
                'longitude' => 148.2805
            ],
            [
                'day_id' => 76,
                'title' => 'Lunch in Hobart',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local Cuisine',
                'address' => 'Franklin Wharf, Hobart TAS 7000, Australia',
                'latitude' => -42.8806,
                'longitude' => 147.3272
            ],

            // Day 9: Visita a Perth
            [
                'day_id' => 77,
                'title' => 'Perth City',
                'image' => 'https://assets.simpleviewinc.com/simpleview/image/upload/c_limit,q_75,w_1200/v1/crm/perthau/Elizabeth-Quay-Perth-Aerial-Day_20EBD597-5056-A36A-0C94E88061AF0DB8-20ebd4565056a36_20ebd5fa-5056-a36a-0cdcb26f03782625.jpg',
                'foods' => null,
                'address' => 'Perth, WA, Australia',
                'latitude' => -31.9505,
                'longitude' => 115.8605
            ],
            [
                'day_id' => 77,
                'title' => 'Cottesloe Beach',
                'image' => 'https://www.beachtomato.com/wp-content/uploads/2017/10/Featured_1280x720-4.jpg',
                'foods' => null,
                'address' => 'Cottesloe Beach, WA, Australia',
                'latitude' => -31.9898,
                'longitude' => 115.7581
            ],
            [
                'day_id' => 77,
                'title' => 'Lunch in Perth',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'International Cuisine',
                'address' => 'Wildflower, 1 Cathedral Ave, Perth WA 6000, Australia',
                'latitude' => -31.9535,
                'longitude' => 115.8605
            ],

            // Day 10: Ritorno
            [
                'day_id' => 78,
                'title' => 'Last Hours in Sydney',
                'image' => 'https://a.cdn-hotels.com/gdcs/production5/d1996/54fdb73f-eee5-4612-a3e7-6fc7ed2f7bee.jpg',
                'foods' => null,
                'address' => 'Hotel Sydney, 123 George St, Sydney NSW 2000, Australia',
                'latitude' => -33.8688,
                'longitude' => 151.2093
            ],
            [
                'day_id' => 78,
                'title' => 'Departure Preparations',
                'image' => 'https://a.cdn-hotels.com/gdcs/production5/d1996/54fdb73f-eee5-4612-a3e7-6fc7ed2f7bee.jpg',
                'foods' => null,
                'address' => 'Hotel Sydney, 123 George St, Sydney NSW 2000, Australia',
                'latitude' => -33.8688,
                'longitude' => 151.2093
            ],
            [
                'day_id' => 78,
                'title' => 'Departure',
                'image' => 'https://a.cdn-hotels.com/gdcs/production5/d1996/54fdb73f-eee5-4612-a3e7-6fc7ed2f7bee.jpg',
                'foods' => null,
                'address' => 'Sydney Airport, Mascot NSW 2020, Australia',
                'latitude' => -33.9399,
                'longitude' => 151.1753
            ],

            //? Tour dell'India del Nord
            // Day 1: Arrivo a Delhi
            [
                'day_id' => 79,
                'title' => 'Arrival in Delhi',
                'image' => 'https://media.cntraveller.com/photos/611bed6df902cc2d167b42bc/16:9/w_2580,c_limit/gettyimages-962826702.jpg',
                'foods' => null,
                'address' => 'Hotel Delhi, Connaught Place, New Delhi, Delhi 110001, India',
                'latitude' => 28.6139,
                'longitude' => 77.2090
            ],

            // Day 2: Visita a Delhi
            [
                'day_id' => 80,
                'title' => 'Qutub Minar',
                'image' => 'https://akm-img-a-in.tosshub.com/indiatoday/images/story/201704/647_042717101905.jpg',
                'foods' => null,
                'address' => 'Qutub Minar, Mehrauli, New Delhi, Delhi 110030, India',
                'latitude' => 28.5244,
                'longitude' => 77.1855
            ],
            [
                'day_id' => 80,
                'title' => 'India Gate',
                'image' => 'https://cdn.britannica.com/38/189838-050-83C7395E/India-War-Memorial-arch-New-Delhi-Sir.jpg',
                'foods' => null,
                'address' => 'Rajpath, India Gate, New Delhi, Delhi 110001, India',
                'latitude' => 28.6139,
                'longitude' => 77.2297
            ],
            [
                'day_id' => 80,
                'title' => 'Lunch in Delhi',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Indian Cuisine',
                'address' => 'Bukhara, ITC Maurya, Sardar Patel Road, New Delhi, Delhi 110021, India',
                'latitude' => 28.5537,
                'longitude' => 77.1658
            ],

            // Day 3: Visita ad Agra
            [
                'day_id' => 81,
                'title' => 'Taj Mahal',
                'image' => 'https://www.travelandleisure.com/thmb/wdUcyBQyQ0wUVs4wLahp0iWgZhc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/taj-mahal-agra-india-TAJ0217-9eab8f20d11d4391901867ed1ce222b8.jpg',
                'foods' => null,
                'address' => 'Dharmapuri, Forest Colony, Tajganj, Agra, Uttar Pradesh 282001, India',
                'latitude' => 27.1751,
                'longitude' => 78.0421
            ],
            [
                'day_id' => 81,
                'title' => 'Agra Fort',
                'image' => 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/75000/75496-Agra-Fort.jpg',
                'foods' => null,
                'address' => 'Agra Fort, Agra, Uttar Pradesh 282003, India',
                'latitude' => 27.1767,
                'longitude' => 78.0081
            ],
            [
                'day_id' => 81,
                'title' => 'Lunch in Agra',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Indian Cuisine',
                'address' => 'Peshawri, ITC Mughal, Taj East Gate Road, Agra, Uttar Pradesh 282001, India',
                'latitude' => 27.1770,
                'longitude' => 78.0211
            ],

            // Day 4: Visita a Jaipur
            [
                'day_id' => 82,
                'title' => 'Hawa Mahal',
                'image' => 'https://cdn.britannica.com/25/242225-050-72142DF7/Front-facade-of-Palace-of-the-Winds-Hawa-Mahal-Jaipur-Rajasthan-India.jpg',
                'foods' => null,
                'address' => 'Hawa Mahal, Badi Choupad, Jaipur, Rajasthan 302002, India',
                'latitude' => 26.2934,
                'longitude' => 75.5822
            ],
            [
                'day_id' => 82,
                'title' => 'Amber Fort',
                'image' => 'https://fourwheeldriveindia.com/public/storage/media/blog/48442.jpg',
                'foods' => null,
                'address' => 'Devisinghpura, Amer, Jaipur, Rajasthan 302001, India',
                'latitude' => 26.9855,
                'longitude' => 75.8514
            ],
            [
                'day_id' => 82,
                'title' => 'Lunch in Jaipur',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Rajasthani Cuisine',
                'address' => 'Suvarna Mahal, Rambagh Palace, Jaipur, Rajasthan 302005, India',
                'latitude' => 26.8802,
                'longitude' => 75.8054
            ],

            // Day 5: Safari al Ranthambore
            [
                'day_id' => 83,
                'title' => 'Ranthambore National Park',
                'image' => 'https://ranthambhorenationalpark.in/images/Ranthambhore%20Tiger%20safari%20park.JPG',
                'foods' => null,
                'address' => 'Ranthambhore National Park, Sawai Madhopur, Rajasthan 322001, India',
                'latitude' => 26.0156,
                'longitude' => 76.7084
            ],
            [
                'day_id' => 83,
                'title' => 'Safari in the Park',
                'image' => 'https://www.savaari.com/blog/wp-content/uploads/2019/09/ranthambore-national-park.jpg',
                'foods' => null,
                'address' => 'Ranthambhore National Park, Sawai Madhopur, Rajasthan 322001, India',
                'latitude' => 26.0156,
                'longitude' => 76.7084
            ],
            [
                'day_id' => 83,
                'title' => 'Lunch in Ranthambore',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local Cuisine',
                'address' => 'The Oberoi Vanyavilas, Ranthambhore Road, Sawai Madhopur, Rajasthan 322001, India',
                'latitude' => 26.0177,
                'longitude' => 76.7025
            ],

            // Day 6: Esplorazione di Jodhpur
            [
                'day_id' => 84,
                'title' => 'Mehrangarh Fort',
                'image' => 'https://img.veenaworld.com/wp-content/uploads/2021/10/Mehrangarh.jpg',
                'foods' => null,
                'address' => 'Mehrangarh Fort, Jodhpur, Rajasthan 342006, India',
                'latitude' => 26.2956,
                'longitude' => 73.3080
            ],
            [
                'day_id' => 84,
                'title' => 'Jaswant Thada',
                'image' => 'https://jodhpurtourism.in/images/places-to-visit/headers/jaswant-thada-jodhpur-entry-fee-timings-holidays-reviews-header.jpg',
                'foods' => null,
                'address' => 'Jaswant Thada, Jodhpur, Rajasthan 342001, India',
                'latitude' => 26.2858,
                'longitude' => 73.0151
            ],
            [
                'day_id' => 84,
                'title' => 'Lunch in Jodhpur',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Rajasthani Cuisine',
                'address' => 'Indique, Pal Haveli, Jodhpur, Rajasthan 342001, India',
                'latitude' => 26.2922,
                'longitude' => 73.0169
            ],

            // Day 7: Visita a Udaipur
            [
                'day_id' => 85,
                'title' => 'Lake Pichola',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/77/15/9a/photo0jpg.jpg?w=1200&h=1200&s=1',
                'foods' => null,
                'address' => 'Pichola Lake, Udaipur, Rajasthan 313001, India',
                'latitude' => 24.5767,
                'longitude' => 73.6785
            ],
            [
                'day_id' => 85,
                'title' => 'City Palace',
                'image' => 'https://map.sahapedia.org/admin/assets/images/2021033013400727799_Banner.jpg?__imr__=bannerMuseum',
                'foods' => null,
                'address' => 'City Palace, Udaipur, Rajasthan 313001, India',
                'latitude' => 24.5798,
                'longitude' => 73.6916
            ],
            [
                'day_id' => 85,
                'title' => 'Lunch in Udaipur',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local Cuisine',
                'address' => 'Ambrai Restaurant, Amet Haveli, Udaipur, Rajasthan 313001, India',
                'latitude' => 24.5755,
                'longitude' => 73.6861
            ],

            // Day 8: Esplorazione di Varanasi
            [
                'day_id' => 86,
                'title' => 'Ganges Ghats',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Varanasi_Munshi_Ghat3.jpg/800px-Varanasi_Munshi_Ghat3.jpg',
                'foods' => null,
                'address' => 'Dashashwamedh Ghat, Varanasi, Uttar Pradesh 221001, India',
                'latitude' => 25.2835,
                'longitude' => 82.9756
            ],
            [
                'day_id' => 86,
                'title' => 'Sarnath',
                'image' => 'https://cdn.britannica.com/19/256719-050-E4CE0DBA/Sarnath-site-Dhamekh-Stupa-Varanasi-Uttar-Pradesh-India.jpg',
                'foods' => null,
                'address' => 'Sarnath, Varanasi, Uttar Pradesh 221007, India',
                'latitude' => 25.3844,
                'longitude' => 82.8417
            ],
            [
                'day_id' => 86,
                'title' => 'Lunch in Varanasi',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Local Cuisine',
                'address' => 'Kashi Chat Bhandar, Vishwanath Gali, Varanasi, Uttar Pradesh 221001, India',
                'latitude' => 25.2835,
                'longitude' => 82.9756
            ],

            // Day 9: Esplorazione di Khajuraho
            [
                'day_id' => 87,
                'title' => 'Khajuraho Temples',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Khajuraho_-_Kandariya_Mahadeo_Temple.jpg/1280px-Khajuraho_-_Kandariya_Mahadeo_Temple.jpg',
                'foods' => null,
                'address' => 'Khajuraho, Madhya Pradesh 471606, India',
                'latitude' => 24.8320,
                'longitude' => 79.9190
            ],
            [
                'day_id' => 87,
                'title' => 'Lunch in Khajuraho',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Indian Cuisine',
                'address' => 'Raja Café, Khajuraho, Madhya Pradesh 471606, India',
                'latitude' => 24.8320,
                'longitude' => 79.9190
            ],

            // Day 10: Ritorno
            [
                'day_id' => 88,
                'title' => 'Last Hours in Delhi',
                'image' => 'https://media.cnn.com/api/v1/images/stellar/prod/181105110720-03-delhi-india-what-to-see-photos-swaminarayan-akshardham.jpg?q=w_1920,h_1080,x_0,y_0,c_fill',
                'foods' => null,
                'address' => 'Hotel Delhi, Connaught Place, New Delhi, Delhi 110001, India',
                'latitude' => 28.6139,
                'longitude' => 77.2090
            ],
            [
                'day_id' => 88,
                'title' => 'Departure Preparations',
                'image' => 'https://media.cnn.com/api/v1/images/stellar/prod/181105110720-03-delhi-india-what-to-see-photos-swaminarayan-akshardham.jpg?q=w_1920,h_1080,x_0,y_0,c_fill',
                'foods' => null,
                'address' => 'Hotel Delhi, Connaught Place, New Delhi, Delhi 110001, India',
                'latitude' => 28.6139,
                'longitude' => 77.2090
            ],
            [
                'day_id' => 88,
                'title' => 'Departure',
                'image' => 'https://media.cnn.com/api/v1/images/stellar/prod/181105110720-03-delhi-india-what-to-see-photos-swaminarayan-akshardham.jpg?q=w_1920,h_1080,x_0,y_0,c_fill',
                'foods' => null,
                'address' => 'Indira Gandhi International Airport, New Delhi, Delhi 110037, India',
                'latitude' => 28.5562,
                'longitude' => 77.1000
            ],
        ];




        foreach ($stops as $stop) {

            $new_stop = new Stop();
            $new_stop->rating = $faker->numberBetween(0, 5);
            $new_stop->fill($stop);
            $new_stop->save();
        }
    }
}

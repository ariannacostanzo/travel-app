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

        $stops = [

            //? Viaggio a Parigi 
            // Day 1: Arrivo a Parigi
            [
                'day_id' => 1,
                'title' => 'Arrivo all\'aeroporto',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => '95700 Roissy-en-France, France',
                'latitude' => 49.0097,
                'longitude' => 2.5479
            ],
            [
                'day_id' => 1,
                'title' => 'Check-in Hotel',
                'image' => 'https://img.freepik.com/foto-gratuito/uomo-pieno-del-colpo-che-trasporta-i-bagagli_23-2149963942.jpg?t=st=1725014534~exp=1725018134~hmac=fa43cdf228d2903db5a62537cd61663bb359dac3ef4265c409eedf9853469847&w=1380',
                'foods' => null,
                'address' => '15 Rue de Rivoli, 75001 Paris, France',
                'latitude' => 48.8606,
                'longitude' => 2.3376
            ],
            [
                'day_id' => 1,
                'title' => 'Cena al ristorante Le Fumoir',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipO6AtpfOGKyvjsIKLNvGmKEHaVdYw--CbPhlxiB=s680-w680-h510',
                'foods' => 'Cucina francese',
                'address' => '6 Rue de l\'Amiral de Coligny, 75001 Paris, France',
                'latitude' => 48.8595,
                'longitude' => 2.3398
            ],

            // Day 2: Tour della città
            [
                'day_id' => 2,
                'title' => 'Torre Eiffel',
                'image' => 'https://img.freepik.com/foto-gratuito/torre-eiffel-di-parigi-con-ponte_1101-916.jpg?t=st=1725018355~exp=1725021955~hmac=a641beb5f2e4d3b372c8723e95c23bcbb3897455821d67fa7b61043e088cd8b6&w=1380',
                'foods' => null,
                'address' => 'Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France',
                'latitude' => 48.8584,
                'longitude' => 2.2945
            ],
            [
                'day_id' => 2,
                'title' => 'Museo del Louvre',
                'image' => 'https://images.pexels.com/photos/2363/france-landmark-lights-night.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Rue de Rivoli, 75001 Paris, France',
                'latitude' => 48.8606,
                'longitude' => 2.3376
            ],
            [
                'day_id' => 2,
                'title' => 'Pranzo al Café Marly',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipMbP6s90Y65yRv__6uJb3ZcewdwktFizxhDb4Ol=s680-w680-h510',
                'foods' => 'Cucina francese',
                'address' => '93 Rue de Rivoli, 75001 Paris, France',
                'latitude' => 48.8606,
                'longitude' => 2.3381
            ],
            [
                'day_id' => 2,
                'title' => 'Passeggiata lungo la Senna',
                'image' => 'https://images.pexels.com/photos/19395799/pexels-photo-19395799/free-photo-of-fiume-sein.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Quai de la Tournelle, 75005 Paris, France',
                'latitude' => 48.8492,
                'longitude' => 2.3480
            ],

            // Day 3: Esplorazione dei quartieri storici
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
                'title' => 'Caffè des Deux Moulins',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/93/Caf%C3%A9_des_2_Moulins_June_2010.jpg',
                'foods' => 'Cucina francese',
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
                'title' => 'Pranzo al Café de Flore',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipNVt-evgMyJ7R8XLXPe-pIyhdKn4U5diAZ13vUE=s680-w680-h510',
                'foods' => 'Cucina francese',
                'address' => '172 Boulevard Saint-Germain, 75006 Paris, France',
                'latitude' => 48.8554,
                'longitude' => 2.3331
            ],

            // Day 4: Visita alla Reggia di Versailles
            [
                'day_id' => 4,
                'title' => 'Reggia di Versailles',
                'image' => 'https://images.pexels.com/photos/13692199/pexels-photo-13692199.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Place d\'Armes, 78000 Versailles, France',
                'latitude' => 48.8049,
                'longitude' => 2.1204
            ],
            [
                'day_id' => 4,
                'title' => 'Giardini di Versailles',
                'image' => 'https://images.pexels.com/photos/17220698/pexels-photo-17220698/free-photo-of-francia-punto-di-riferimento-alberi-erba.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Place d\'Armes, 78000 Versailles, France',
                'latitude' => 48.8049,
                'longitude' => 2.1204
            ],
            [
                'day_id' => 4,
                'title' => 'Pranzo al ristorante La Petite Venise',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipOknc1lFqn9SRg3t9Ls0MCwA7_LeX7YZy6rfHSt=s680-w680-h510',
                'foods' => 'Cucina francese',
                'address' => 'Château de Versailles, 78000 Versailles, France',
                'latitude' => 48.8049,
                'longitude' => 2.1204
            ],

            // Day 5: Crociera sulla Senna
            [
                'day_id' => 5,
                'title' => 'Crociera sulla Senna',
                'image' => 'https://www.pimpmytrip.it/wp-content/uploads/2022/12/crociera-senna-parigi.jpg',
                'foods' => null,
                'address' => 'Port de la Conférence, 75008 Paris, France',
                'latitude' => 48.8559,
                'longitude' => 2.3214
            ],
            [
                'day_id' => 5,
                'title' => 'Passeggiata nei Jardins des Tuileries',
                'image' => 'https://www.parigi.it/images/large/418_1-jardin-des-tuileries-carrousel-garden-c12745.jpg?v=ee38',
                'foods' => null,
                'address' => 'Place de la Concorde, 75001 Paris, France',
                'latitude' => 48.8638,
                'longitude' => 2.3270
            ],
            [
                'day_id' => 5,
                'title' => 'Cena al Le Relais de l\'Entrecôte',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipPl6mw9fcvc4TXrmoETCAvPz6_nNODcJcU-NKtk=s680-w680-h510-rw',
                'foods' => 'Cucina francese',
                'address' => '20 Rue Saint-Benoît, 75006 Paris, France',
                'latitude' => 48.8553,
                'longitude' => 2.3340
            ],

            // Day 6: Museo d'Orsay
            [
                'day_id' => 6,
                'title' => 'Museo d\'Orsay',
                'image' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/0d/0e/1f/c9.jpg',
                'foods' => null,
                'address' => '1 Rue de la Légion d\'Honneur, 75007 Paris, France',
                'latitude' => 48.8599,
                'longitude' => 2.3266
            ],
            [
                'day_id' => 6,
                'title' => 'Cattedrale di Notre-Dame',
                'image' => 'https://images.pexels.com/photos/1460145/pexels-photo-1460145.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => '6 Parvis Notre-Dame - Place Jean-Paul II, 75004 Paris, France',
                'latitude' => 48.8534,
                'longitude' => 2.3488
            ],
            [
                'day_id' => 6,
                'title' => 'Pranzo al Le Comptoir du Relais',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipPWk2E3dVK9nkIU1vcK5-R6cuIJJRnRFhrGjAN0=s680-w680-h510',
                'foods' => 'Cucina francese',
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
                'title' => 'Pranzo al Ladurée',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipNl87yAb3IFtkjUNCJSYrsYLnx4nkoaWu704etU=s680-w680-h510-rw',
                'foods' => 'Pasticceria',
                'address' => '75 Avenue des Champs-Élysées, 75008 Paris, France',
                'latitude' => 48.8688,
                'longitude' => 2.3070
            ],

            // Day 8: Ritorno
            [
                'day_id' => 8,
                'title' => 'Check-out Hotel',
                'image' => 'https://img.freepik.com/foto-gratuito/uomo-pieno-del-colpo-che-trasporta-i-bagagli_23-2149963942.jpg?t=st=1725014534~exp=1725018134~hmac=fa43cdf228d2903db5a62537cd61663bb359dac3ef4265c409eedf9853469847&w=1380',
                'foods' => null,
                'address' => '15 Rue de Rivoli, 75001 Paris, France',
                'latitude' => 48.8606,
                'longitude' => 2.3376
            ],
            [
                'day_id' => 8,
                'title' => 'Trasferimento all\'aeroporto',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => '95700 Roissy-en-France, France',
                'latitude' => 49.0097,
                'longitude' => 2.5479
            ],
            [
                'day_id' => 8,
                'title' => 'Partenza',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Aeroporto Charles de Gaulle, 95700 Roissy-en-France, France',
                'latitude' => 49.0097,
                'longitude' => 2.5479
            ],

            //? Safari in Kenya
            // Day 1: Arrivo a Nairobi
            [
                'day_id' => 9,
                'title' => 'Arrivo a Nairobi',
                'image' => 'https://media.istockphoto.com/id/637912692/it/foto/nairobi-cityscape-capitale-del-kenya.jpg?s=612x612&w=0&k=20&c=yDJsWeFJ3OHMa3awGjavDF2EAUx1ZueEqPBUszY5nZQ=',
                'foods' => null,
                'address' => 'Hilton Nairobi, Mama Ngina St, Nairobi, Kenya',
                'latitude' => -1.2864,
                'longitude' => 36.8172
            ],
            [
                'day_id' => 9,
                'title' => 'Cena al ristorante dell\'hotel',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina locale e internazionale',
                'address' => 'Hilton Nairobi, Mama Ngina St, Nairobi, Kenya',
                'latitude' => -1.2864,
                'longitude' => 36.8172
            ],

            // Day 2: Safari al Maasai Mara
            [
                'day_id' => 10,
                'title' => 'Partenza per il Maasai Mara',
                'image' => 'https://images.pexels.com/photos/18000393/pexels-photo-18000393/free-photo-of-paesaggio-natura-cespuglio-animale.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 10,
                'title' => 'Safari nel Maasai Mara',
                'image' => 'https://rhinotouristcamp.com/wp-content/uploads/2023/06/f671d17b6393a922e4fe959cec5f9a23-1-1-1024x683.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 10,
                'title' => 'Pranzo picnic nel Maasai Mara',
                'image' => 'https://www.masaimara.com/assets/img/masai-mara.jpg',
                'foods' => 'Picnic con cibo locale',
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],

            // Day 3: Safari al Maasai Mara
            [
                'day_id' => 11,
                'title' => 'Safari mattutino nel Maasai Mara',
                'image' => 'https://www.shoortravel.com/image/masai-mara-kenya.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 11,
                'title' => 'Pranzo al campo',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/60/b5/92/campo-tendato-di-lusso.jpg',
                'foods' => 'Pranzo al sacco',
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 11,
                'title' => 'Safari pomeridiano',
                'image' => 'https://bigmama.travel/wp-content/uploads/2022/10/safari-masai-mara-Kenya.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],

            // Day 4: Safari al Maasai Mara
            [
                'day_id' => 12,
                'title' => 'Esplorazione della riserva',
                'image' => 'https://cdn.getyourguide.com/img/tour/7a8f378fa32f1a08.jpeg/98.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 12,
                'title' => 'Pranzo al lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => 'Cucina locale',
                'address' => 'Maasai Mara Lodge, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],
            [
                'day_id' => 12,
                'title' => 'Safari serale',
                'image' => 'https://etcdn.net/thumbnails/23272/it-kenya-nakupenda-il-meglio-del-kenya-safari-4gg3nn-e-mare-7ed57.jpg',
                'foods' => null,
                'address' => 'Maasai Mara National Reserve, Kenya',
                'latitude' => -1.5250,
                'longitude' => 35.2164
            ],

            // Day 5: Visita al Lago Nakuru
            [
                'day_id' => 13,
                'title' => 'Partenza per il Lago Nakuru',
                'image' => 'https://img.freepik.com/foto-gratuito/stormo-di-fenicotteri-rosa-maggiori_155003-14649.jpg?t=st=1725020003~exp=1725023603~hmac=ee7dc135ad047d76c0a826e027dc48bd1740bcdb4f0b70481024c19b9cb484e8&w=1380',
                'foods' => null,
                'address' => 'Lake Nakuru National Park, Kenya',
                'latitude' => -0.2828,
                'longitude' => 36.0713
            ],
            [
                'day_id' => 13,
                'title' => 'Safari al Lago Nakuru',
                'image' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/6b/6c/11.jpg',
                'foods' => null,
                'address' => 'Lake Nakuru National Park, Kenya',
                'latitude' => -0.2828,
                'longitude' => 36.0713
            ],
            [
                'day_id' => 13,
                'title' => 'Pranzo al parco',
                'image' => 'https://safarikenyaprofessionalguide.com/wp-content/uploads/photo-gallery/TheBushCamp/safari-kenya-bush-camp-19.jpg?bwg=1652373519',
                'foods' => 'Picnic con vista sul lago',
                'address' => 'Lake Nakuru National Park, Kenya',
                'latitude' => -0.2828,
                'longitude' => 36.0713
            ],

            // Day 6: Safari al Parco Amboseli
            [
                'day_id' => 14,
                'title' => 'Arrivo al Parco Amboseli',
                'image' => 'https://www.civitatis.com/f/kenia/nairobi/safari-3-dias-amboseli-589x392.jpg',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 14,
                'title' => 'Safari nel Parco Amboseli',
                'image' => 'https://cdn.getyourguide.com/img/tour/d9031239b2110364b19304e46320044577ed019be14ccadeae0aa08823c77ea6.jpeg/146.jpg',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 14,
                'title' => 'Pranzo al lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => 'Cucina locale',
                'address' => 'Amboseli Lodge, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],

            // Day 7: Safari al Parco Amboseli
            [
                'day_id' => 15,
                'title' => 'Safari nel Parco Amboseli',
                'image' => 'https://cdn.getyourguide.com/img/tour/ccc6dc462014f439eba0cb4325519ac64a0b358d66532ab82d52bef064b48e45.jpg/98.jpg',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 15,
                'title' => 'Pranzo al campo',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/60/b5/92/campo-tendato-di-lusso.jpg',
                'foods' => 'Pranzo al sacco',
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 15,
                'title' => 'Safari pomeridiano',
                'image' => 'https://viaggidelgenio.it/wp-content/uploads/2023/04/1-1.jpg',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],

            // Day 8: Visita al villaggio Maasai
            [
                'day_id' => 16,
                'title' => 'Visita al villaggio Maasai',
                'image' => 'https://www.safarikenyaconsamuel.it/wp-content/uploads/elementor/thumbs/Masai-village-1-pxf3msdnoal9tldds0ory2a12gxzdep85ls9khp9r0-optimized.jpg',
                'foods' => null,
                'address' => 'Maasai Village, Kenya',
                'latitude' => -1.6000,
                'longitude' => 36.5000
            ],
            [
                'day_id' => 16,
                'title' => 'Interazione con i Maasai',
                'image' => 'https://cdn.prod.website-files.com/647f003abb4628bf7e34658d/64e7bdf446eef5b331f8eebb_Maasai-shuka.jpg',
                'foods' => 'Cibo tradizionale Maasai',
                'address' => 'Maasai Village, Kenya',
                'latitude' => -1.6000,
                'longitude' => 36.5000
            ],
            [
                'day_id' => 16,
                'title' => 'Ritorno al lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => null,
                'address' => 'Amboseli Lodge, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],

            // Day 9: Giornata di relax
            [
                'day_id' => 17,
                'title' => 'Relax al Lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => null,
                'address' => 'Serena Lodge, Amboseli, Kenya',
                'latitude' => -2.7017,
                'longitude' => 37.2307
            ],
            [
                'day_id' => 17,
                'title' => 'Passeggiata nei dintorni',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/250342713.jpg?k=417b11799f9bcf196d4783f089e90e7b4e02f07025f08ccc75519ec349d68e9f&o=&hp=1',
                'foods' => null,
                'address' => 'Amboseli National Park, Kenya',
                'latitude' => -2.6540,
                'longitude' => 37.3022
            ],
            [
                'day_id' => 17,
                'title' => 'Relax nella piscina del lodge',
                'image' => 'https://images.pexels.com/photos/261101/pexels-photo-261101.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Serena Lodge, Amboseli, Kenya',
                'latitude' => -2.7017,
                'longitude' => 37.2307
            ],
            [
                'day_id' => 17,
                'title' => 'Pranzo al lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => 'Cucina internazionale',
                'address' => 'Serena Lodge, Amboseli, Kenya',
                'latitude' => -2.7017,
                'longitude' => 37.2307
            ],

            // Day 10: Ritorno
            [
                'day_id' => 18,
                'title' => 'Check-out dal lodge',
                'image' => 'https://backpackeradventure.it/img/blog/1589132313_fr_393984594_2011-10-1620.jpg',
                'foods' => null,
                'address' => 'Serena Lodge, Amboseli, Kenya',
                'latitude' => -2.7017,
                'longitude' => 37.2307
            ],
            [
                'day_id' => 18,
                'title' => 'Trasferimento a Nairobi',
                'image' => 'https://media.istockphoto.com/id/637912692/it/foto/nairobi-cityscape-capitale-del-kenya.jpg?s=612x612&w=0&k=20&c=yDJsWeFJ3OHMa3awGjavDF2EAUx1ZueEqPBUszY5nZQ=',
                'foods' => null,
                'address' => 'Nairobi, Kenya',
                'latitude' => -1.2864,
                'longitude' => 36.8172
            ],
            [
                'day_id' => 18,
                'title' => 'Partenza dall\'aeroporto di Nairobi',
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
                'title' => 'Arrivo a Tokyo',
                'image' => 'https://www.sognandoilgiappone.com/wp-content/uploads/2024/06/Depositphotos_563013432_S.jpg',
                'foods' => null,
                'address' => 'Shinjuku Granbell Hotel, 2-14-5 Shinjuku, Tokyo, Japan',
                'latitude' => 35.6928,
                'longitude' => 139.7033
            ],
            [
                'day_id' => 19,
                'title' => 'Cena in un ristorante locale',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina giapponese',
                'address' => 'Ristorante Tokyo, 1-2-3 Roppongi, Tokyo, Japan',
                'latitude' => 35.6605,
                'longitude' => 139.7292
            ],

            // Day 2: Visita di Tokyo
            [
                'day_id' => 20,
                'title' => 'Esplorazione di Shibuya',
                'image' => 'https://www.gotokyo.org/it/destinations/western-tokyo/shibuya/images/main.jpg',
                'foods' => null,
                'address' => 'Shibuya Crossing, Shibuya, Tokyo, Japan',
                'latitude' => 35.6595,
                'longitude' => 139.7004
            ],
            [
                'day_id' => 20,
                'title' => 'Visita al Tempio Meiji',
                'image' => 'https://mywowo.net/media/images/cache/tokyo_santuario_meiji_01_presentazione_jpg_1200_630_cover_85.jpg',
                'foods' => null,
                'address' => '1-1 Yoyogikamizonocho, Shibuya City, Tokyo, Japan',
                'latitude' => 35.6764,
                'longitude' => 139.6993
            ],
            [
                'day_id' => 20,
                'title' => 'Esplorazione di Shinjuku',
                'image' => 'https://i0.wp.com/www.touristjapan.com/wp-content/uploads/2017/06/Shutterstock_635797538.jpg?resize=800%2C534&ssl=1',
                'foods' => null,
                'address' => 'Shinjuku, Tokyo, Japan',
                'latitude' => 35.6938,
                'longitude' => 139.7034
            ],

            // Day 3: Visita a Kyoto
            [
                'day_id' => 21,
                'title' => 'Gita al Santuario di Fushimi Inari',
                'image' => 'https://a1.cdn.japantravel.com/photo/poi-40-213932/800x600!/kyoto-fushimi-inari-taisha-213932.jpg',
                'foods' => null,
                'address' => '68 Fukakusa Yabunouchicho, Fushimi Ward, Kyoto, Japan',
                'latitude' => 34.9671,
                'longitude' => 135.7727
            ],
            [
                'day_id' => 21,
                'title' => 'Pranzo in ristorante tradizionale',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipP7UbBvJRqnkh5Rz-womF4Ip0yHUiDldv_j3Fdi=s680-w680-h510',
                'foods' => 'Cucina tradizionale giapponese',
                'address' => 'Ristorante Kyoto, 123 Gion, Kyoto, Japan',
                'latitude' => 35.0034,
                'longitude' => 135.7778
            ],

            // Day 4: Esplorazione di Nara
            [
                'day_id' => 22,
                'title' => 'Visita al Parco dei Cervi',
                'image' => 'https://www.giapponepertutti.it/demo/wp-content/uploads/2020/04/Parco-di-Nara-Cervo.jpg',
                'foods' => null,
                'address' => 'Nara Park, Nara, Japan',
                'latitude' => 34.6851,
                'longitude' => 135.8048
            ],
            [
                'day_id' => 22,
                'title' => 'Visita al Tempio Todai-ji',
                'image' => 'https://www.italiajapan.net/img/s68/i9/todaiji_70137405-850x551.jpg',
                'foods' => null,
                'address' => '406-1 Zoshicho, Nara, Japan',
                'latitude' => 34.6853,
                'longitude' => 135.8328
            ],
            [
                'day_id' => 22,
                'title' => 'Pranzo in un ristorante locale',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina locale',
                'address' => 'Ristorante Nara, 45 Naramachi, Nara, Japan',
                'latitude' => 34.6851,
                'longitude' => 135.8048
            ],

            // Day 5: Visita al Monte Fuji
            [
                'day_id' => 23,
                'title' => 'Escursione al Monte Fuji',
                'image' => 'https://www.sognandoilgiappone.com/wp-content/uploads/2016/01/escursione-monte-fuji.jpg',
                'foods' => null,
                'address' => 'Mount Fuji, Yamanashi, Japan',
                'latitude' => 35.3606,
                'longitude' => 138.7274
            ],
            [
                'day_id' => 23,
                'title' => 'Relax negli Onsen',
                'image' => 'https://res.cloudinary.com/jnto/image/upload/w_600,fl_lossy,f_auto,q_auto,c_scale/v1/media/filer_public/3d/23/3d23fd41-f180-42b5-ac90-bfd3f9290df3/ginzan_onsen_yamagata_2_le9ekk',
                'foods' => null,
                'address' => 'Hakone Onsen, Hakone, Kanagawa, Japan',
                'latitude' => 35.2333,
                'longitude' => 139.0667
            ],
            [
                'day_id' => 23,
                'title' => 'Pranzo al ristorante con vista',
                'image' => 'https://images.pexels.com/photos/1579739/pexels-photo-1579739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina giapponese',
                'address' => 'Ristorante Fuji, 123 Fuji View, Yamanashi, Japan',
                'latitude' => 35.3606,
                'longitude' => 138.7274
            ],

            // Day 6: Visita a Hiroshima
            [
                'day_id' => 24,
                'title' => 'Parco della Pace di Hiroshima',
                'image' => 'https://www.ticonsigliounviaggio.it/wp-content/uploads/2020/08/hiroshima-parco-della-pace-scaled.jpg',
                'foods' => null,
                'address' => '1-2 Nakajimacho, Naka Ward, Hiroshima, Japan',
                'latitude' => 34.3963,
                'longitude' => 132.4594
            ],
            [
                'day_id' => 24,
                'title' => 'Museo della Pace di Hiroshima',
                'image' => 'https://res-3.cloudinary.com/jnto/image/upload/w_2064,h_1300,c_fill,f_auto,fl_lossy,q_auto/v1647835741/hiroshima/M_01457_001',
                'foods' => null,
                'address' => '1-2 Nakajimacho, Naka Ward, Hiroshima, Japan',
                'latitude' => 34.3963,
                'longitude' => 132.4594
            ],
            [
                'day_id' => 24,
                'title' => 'Pranzo a Hiroshima',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Okonomiyaki',
                'address' => 'Ristorante Hiroshima, 456 Peace Avenue, Hiroshima, Japan',
                'latitude' => 34.3963,
                'longitude' => 132.4594
            ],

            // Day 7: Visita a Osaka
            [
                'day_id' => 25,
                'title' => 'Esplorazione del Castello di Osaka',
                'image' => 'https://www.lastampa.it/image/contentid/policy:1.35869340:1561542025/NX-VGG-GAL-G355552-shutterstock_39215380-355556.jpg?f=gallery_1280&h=702&w=1280&$p$f$h$w=44e99dd',
                'foods' => null,
                'address' => '1-1 Osakajo, Chuo Ward, Osaka, Japan',
                'latitude' => 34.6873,
                'longitude' => 135.5259
            ],
            [
                'day_id' => 25,
                'title' => 'Visita ai mercati di Dotonbori',
                'image' => 'https://res-2.cloudinary.com/jnto/image/upload/w_2064,h_1300,c_fill,f_auto,fl_lossy,q_auto/v1648006915/kyoto/H_00480_001',
                'foods' => null,
                'address' => 'Dotonbori, Chuo Ward, Osaka, Japan',
                'latitude' => 34.6687,
                'longitude' => 135.5016
            ],
            [
                'day_id' => 25,
                'title' => 'Pranzo a Osaka',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina locale',
                'address' => 'Ristorante Osaka, 789 Dotonbori, Osaka, Japan',
                'latitude' => 34.6687,
                'longitude' => 135.5016
            ],

            // Day 8: Visita al villaggio di Shirakawa-go
            [
                'day_id' => 26,
                'title' => 'Esplorazione di Shirakawa-go',
                'image' => 'https://travel.rakuten.com/contents/sites/contents/files/styles/max_1300x1300/public/2023-08/shirakawago_1.jpg?itok=lXpf_XUo',
                'foods' => null,
                'address' => 'Shirakawa-go, Gifu Prefecture, Japan',
                'latitude' => 36.1341,
                'longitude' => 136.8986
            ],
            [
                'day_id' => 26,
                'title' => 'Pranzo in un ristorante locale',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina tradizionale',
                'address' => 'Ristorante Shirakawa, 123 Village Street, Shirakawa-go, Japan',
                'latitude' => 36.1341,
                'longitude' => 136.8986
            ],

            // Day 9: Visita al Castello di Himeji
            [
                'day_id' => 27,
                'title' => 'Gita al Castello di Himeji',
                'image' => 'https://matteoingiappone.s3.eu-central-1.amazonaws.com/wp-content/uploads/2020/03/Castello-di-Himeji-e1585668400382.jpg',
                'foods' => null,
                'address' => '68 Honmachi, Himeji, Hyogo, Japan',
                'latitude' => 34.8394,
                'longitude' => 134.6939
            ],
            [
                'day_id' => 27,
                'title' => 'Pranzo a Himeji',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina giapponese',
                'address' => 'Ristorante Himeji, 45 Castle Street, Himeji, Japan',
                'latitude' => 34.8394,
                'longitude' => 134.6939
            ],

            // Day 10: Ritorno
            [
                'day_id' => 28,
                'title' => 'Ritorno a Tokyo',
                'image' => 'https://www.gotokyo.org/it/destinations/eastern-tokyo/images/area024_1000_78.jpg',
                'foods' => null,
                'address' => 'Shinjuku Granbell Hotel, 2-14-5 Shinjuku, Tokyo, Japan',
                'latitude' => 35.6928,
                'longitude' => 139.7033
            ],
            [
                'day_id' => 28,
                'title' => 'Partenza dall\'aeroporto di Tokyo',
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
                'title' => 'Imbarco a Miami',
                'image' => 'https://blog.cruisingjournal.com/wp-content/uploads/2021/01/miami-cruise-terminal.jpg',
                'foods' => null,
                'address' => 'Porto di Miami, Miami, FL, USA',
                'latitude' => 25.7743,
                'longitude' => -80.1937
            ],
            [
                'day_id' => 29,
                'title' => 'Cena di benvenuto a bordo',
                'image' => 'https://www.costacrociere.it/content/dam/costa/costa-magazine/articles-magazine/costa-smeralda/food-experience/restaurant_m.jpg.image.694.390.low.jpg',
                'foods' => 'Varietà di piatti internazionali',
                'address' => 'Nave da crociera, Porto di Miami, Miami, FL, USA',
                'latitude' => 25.7743,
                'longitude' => -80.1937
            ],

            // Day 2: Navigazione verso Nassau
            [
                'day_id' => 30,
                'title' => 'Navigazione verso Nassau',
                'image' => 'https://www.msccrociere.it/-/media/global-contents/destinations/ports/bahamas/nassau/cruise-to-nassau-bahamas.jpg?bc=transparent&as=1&dmc=0&iar=0&mh=1395&mw=2460&sc=0&thn=0&udi=0&hash=17811B7B0A2DDA970DA119B9A0538C85',
                'foods' => null,
                'address' => 'In mare aperto',
                'latitude' => 25.0343,
                'longitude' => -77.3963
            ],

            // Day 3: Visita a Nassau
            [
                'day_id' => 31,
                'title' => 'Visita a Nassau',
                'image' => 'https://tempo.cdn.tambourine.com/windsong/media/bmot-islands-nassau-stay-quad-atlantis-65676e2f5d600.jpg',
                'foods' => null,
                'address' => 'Nassau, Bahamas',
                'latitude' => 25.0343,
                'longitude' => -77.3963
            ],
            [
                'day_id' => 31,
                'title' => 'Pranzo a Nassau',
                'image' => 'https://images.pexels.com/photos/1579739/pexels-photo-1579739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina caraibica',
                'address' => 'Ristorante Nassau, 123 Bay Street, Nassau, Bahamas',
                'latitude' => 25.0343,
                'longitude' => -77.3963
            ],

            // Day 4: Navigazione verso Cozumel
            [
                'day_id' => 32,
                'title' => 'Navigazione verso Cozumel',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/409280678.jpg?k=d77928add0e666828e05c603d3e682b78fe2f55d3e42a4557c41bdc2ba6a1734&o=&hp=1',
                'foods' => null,
                'address' => 'In mare aperto',
                'latitude' => 22.7758,
                'longitude' => -85.1638
            ],

            // Day 5: Visita a Cozumel
            [
                'day_id' => 33,
                'title' => 'Visita a Cozumel',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/183417546.jpg?k=896c4143b4dd728c4ea0d340ba15e23f6ed1572ccb19e6a2b50a60eb3f4a4071&o=&hp=1',
                'foods' => null,
                'address' => 'Cozumel, Messico',
                'latitude' => 20.4897,
                'longitude' => -86.9511
            ],
            [
                'day_id' => 33,
                'title' => 'Snorkeling a Cozumel',
                'image' => 'https://images.squarespace-cdn.com/content/v1/5707bd62b654f9540cad0a50/1610986066541-X8128QCFWUSS6Z5MYCOO/sea-turtle-columbia-reef-cozumel.jpg',
                'foods' => null,
                'address' => 'Sito di snorkeling, Cozumel, Messico',
                'latitude' => 20.4897,
                'longitude' => -86.9511
            ],

            // Day 6: Navigazione verso Roatán
            [
                'day_id' => 34,
                'title' => 'Navigazione verso Roatán',
                'image' => 'https://media.tacdn.com/media/attractions-content--1x-1/10/45/06/d1.jpg',
                'foods' => null,
                'address' => 'In mare aperto',
                'latitude' => 16.2800,
                'longitude' => -85.6000
            ],

            // Day 7: Visita a Roatán
            [
                'day_id' => 35,
                'title' => 'Visita a Roatán',
                'image' => 'https://www.grandroatanresortandspa.com/images/1700-960/20230907-kimpton-grand-roatan-0802e-drone-hi-res-4c94a381.jpg',
                'foods' => null,
                'address' => 'Roatán, Honduras',
                'latitude' => 16.3002,
                'longitude' => -86.5274
            ],
            [
                'day_id' => 35,
                'title' => 'Relax in spiaggia a Roatán',
                'image' => 'https://i0.wp.com/passporterapp.com/it/blog/wp-content/uploads/2023/08/spiagge-in-honduras-roatan.jpg?resize=1024%2C682&ssl=1',
                'foods' => null,
                'address' => 'Spiaggia di West Bay, Roatán, Honduras',
                'latitude' => 16.2953,
                'longitude' => -86.5270
            ],

            // Day 8: Navigazione verso Miami
            [
                'day_id' => 36,
                'title' => 'Navigazione verso Miami',
                'image' => 'https://images5.bovpg.net/r/back/it/sale/5524def409c01o.jpg',
                'foods' => null,
                'address' => 'In mare aperto',
                'latitude' => 25.8000,
                'longitude' => -80.2000
            ],

            // Day 9: Relax sulla nave
            [
                'day_id' => 37,
                'title' => 'Relax sulla nave',
                'image' => 'https://www.ncl.com/sites/default/files/700x745_HeaderImage_Escape2.jpg',
                'foods' => null,
                'address' => 'Nave da crociera, In mare aperto',
                'latitude' => 25.8000,
                'longitude' => -80.2000
            ],
            [
                'day_id' => 37,
                'title' => 'Cena di gala',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina gourmet',
                'address' => 'Nave da crociera, In mare aperto',
                'latitude' => 25.8000,
                'longitude' => -80.2000
            ],

            // Day 10: Sbarco a Miami
            [
                'day_id' => 38,
                'title' => 'Sbarco a Miami',
                'image' => 'https://www.miamiandbeaches.com/getmedia/f35e8173-0df2-4bed-86dc-727805570021/Miami-Aerial-Photos-Golden-Dusk-Photography-1440x900.jpg?width=1000&resizemode=force',
                'foods' => null,
                'address' => 'Porto di Miami, Miami, FL, USA',
                'latitude' => 25.7743,
                'longitude' => -80.1937
            ],
            [
                'day_id' => 38,
                'title' => 'Trasferimento all\'aeroporto',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Aeroporto Internazionale di Miami, Miami, FL, USA',
                'latitude' => 25.7959,
                'longitude' => -80.2870
            ],

            //? Esplorazione Islanda
            // Day 1: Arrivo a Reykjavik
            [
                'day_id' => 39,
                'title' => 'Arrivo a Reykjavik',
                'image' => 'https://images.prismic.io/visiticeland/fed7e105-3226-4c2f-a764-78f5863ca6ba_reykjavik.png?auto=compress,format',
                'foods' => null,
                'address' => 'Reykjavik, Islanda',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],
            [
                'day_id' => 39,
                'title' => 'Cena di benvenuto',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Specialità islandesi',
                'address' => 'Ristorante Reykjavik, 101 Reykjavik, Islanda',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],
            [
                'day_id' => 39,
                'title' => 'Passeggiata serale',
                'image' => 'https://thetourguy.com/wp-content/uploads/2023/01/WTS-Reykjavik-feature-1440-675.jpg',
                'foods' => null,
                'address' => 'Laugavegur, Reykjavik, Islanda',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],

            // Day 2: Visita alla Laguna Blu
            [
                'day_id' => 40,
                'title' => 'Visita alla Laguna Blu',
                'image' => 'https://guidetoiceland.imgix.net/352080/x/0/la-guida-completa-alla-laguna-blu-7?ixlib=php-3.3.0&w=883',
                'foods' => 'Snack e bevande disponibili',
                'address' => 'Laguna Blu, 240 Grindavik, Islanda',
                'latitude' => 63.8804,
                'longitude' => -22.4495
            ],
            [
                'day_id' => 40,
                'title' => 'Pranzo al ristorante',
                'image' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/188422136.jpg?k=9e146f7c2d46989bfd712b5adf77bcbdac28bdc9c7935ce85e5f0b4c0e8834f2&o=&hp=1',
                'foods' => 'Cucina islandese e internazionale',
                'address' => 'Laguna Blu, 240 Grindavik, Islanda',
                'latitude' => 63.8804,
                'longitude' => -22.4495
            ],
            [
                'day_id' => 40,
                'title' => 'Relax e spa alla Laguna Blu',
                'image' => 'https://i.etsystatic.com/8026687/r/il/dc4060/1265078092/il_570xN.1265078092_5dtr.jpg',
                'foods' => null,
                'address' => 'Laguna Blu, 240 Grindavik, Islanda',
                'latitude' => 63.8804,
                'longitude' => -22.4495
            ],

            // Day 3: Cascate e Geyser
            [
                'day_id' => 41,
                'title' => 'Geysir',
                'image' => 'https://images.lonelyplanetitalia.it/static/places/geysir-2166.jpg?q=90&p=2400%7C1350%7Cmax&s=2d7361a24d1d19de323ed0a879948017',
                'foods' => null,
                'address' => 'Haukadalur, Islanda',
                'latitude' => 64.3136,
                'longitude' => -20.3024
            ],
            [
                'day_id' => 41,
                'title' => 'Cascata Gullfoss',
                'image' => 'https://www.esperienzaviaggio.it/wp-content/uploads/2023/03/Europa-Islanda-circolo-oro-cascate-Gullfoss-01.webp',
                'foods' => null,
                'address' => 'Cascata Gullfoss, 801 Selfoss, Islanda',
                'latitude' => 64.3275,
                'longitude' => -20.1200
            ],
            [
                'day_id' => 41,
                'title' => 'Þingvellir National Park',
                'image' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/0a/2c/2a/4f.jpg',
                'foods' => null,
                'address' => 'Þingvellir, 801 Selfoss, Islanda',
                'latitude' => 64.2559,
                'longitude' => -21.1290
            ],
            [
                'day_id' => 41,
                'title' => 'Cena a Þingvellir',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Piatti tipici islandesi',
                'address' => 'Ristorante Þingvellir, 801 Selfoss, Islanda',
                'latitude' => 64.2559,
                'longitude' => -21.1290
            ],

            // Day 4: Esplorazione del sud
            [
                'day_id' => 42,
                'title' => 'Cascata Seljalandsfoss',
                'image' => 'https://www.islanda.it/uploads/media/islanda-cascata-seljalandsfoss-65b8b13cb8df5958442229.jpg',
                'foods' => null,
                'address' => 'Cascata Seljalandsfoss, 861 Hvolsvöllur, Islanda',
                'latitude' => 63.6156,
                'longitude' => -19.9926
            ],
            [
                'day_id' => 42,
                'title' => 'Cascata Skógafoss',
                'image' => 'https://www.viaggioinislanda.it/wp-content/uploads/waterfall-in-iceland-s-Skogafoss-876x575.jpg',
                'foods' => null,
                'address' => 'Cascata Skógafoss, 861 Skógar, Islanda',
                'latitude' => 63.5321,
                'longitude' => -19.5114
            ],
            [
                'day_id' => 42,
                'title' => 'Spiaggia nera di Reynisfjara',
                'image' => 'https://www.ifrattempidellamiavita.com/wp-content/uploads/2022/03/Reynisfjara.jpg',
                'foods' => null,
                'address' => 'Reynisfjara, Vik, Islanda',
                'latitude' => 63.4064,
                'longitude' => -19.0708
            ],
            [
                'day_id' => 42,
                'title' => 'Pranzo a Vik',
                'image' => 'https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Specialità locali',
                'address' => 'Ristorante Vik, Vik í Mýrdal, Islanda',
                'latitude' => 63.4184,
                'longitude' => -19.0064
            ],

            // Day 5: Visita alla laguna glaciale
            [
                'day_id' => 43,
                'title' => 'Laguna Glaciale di Jökulsárlón',
                'image' => 'https://arcticshorex.com/wp-content/uploads/2020/07/Jokulsarlon-Glacial-Lagoon-5-1024x576.jpg',
                'foods' => null,
                'address' => 'Jökulsárlón, 781 Höfn, Islanda',
                'latitude' => 64.0481,
                'longitude' => -16.1791
            ],
            [
                'day_id' => 43,
                'title' => 'Giro in barca tra gli iceberg',
                'image' => 'https://www.viaggioinislanda.it/wp-content/uploads/attraversamento-della-laguna.jpg',
                'foods' => null,
                'address' => 'Laguna Glaciale di Jökulsárlón, 781 Höfn, Islanda',
                'latitude' => 64.0481,
                'longitude' => -16.1791
            ],
            [
                'day_id' => 43,
                'title' => 'Spiaggia di Diamond Beach',
                'image' => 'https://difotoediviaggi.it/images/foto-articoli/islanda-diamond-beac/diamond-spiaggia-islanda.webp',
                'foods' => null,
                'address' => 'Diamond Beach, Höfn, Islanda',
                'latitude' => 64.0444,
                'longitude' => -16.1824
            ],

            // Day 6: Escursione sui ghiacciai
            [
                'day_id' => 44,
                'title' => 'Escursione sui Ghiacciai',
                'image' => 'https://www.eleonoraongaro.it/wp-content/uploads/2021/02/Tour-nelle-Ice-Caves-in-Islanda-1030x687.jpg',
                'foods' => null,
                'address' => 'Ghiacciaio Vatnajökull, Islanda',
                'latitude' => 64.1342,
                'longitude' => -16.9830
            ],
            [
                'day_id' => 44,
                'title' => 'Visita alla grotta di ghiaccio',
                'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/56/70/39/caption.jpg?w=1200&h=-1&s=1',
                'foods' => null,
                'address' => 'Grotta di Ghiaccio, Vatnajökull, Islanda',
                'latitude' => 64.1342,
                'longitude' => -16.9830
            ],
            [
                'day_id' => 44,
                'title' => 'Aurora Boreale',
                'image' => 'https://www.ilviaggiatore-magazine.it/wp-content/uploads/2022/11/AdobeStock_539954995-ACQUISTATA-RIDOTTA.jpg',
                'foods' => null,
                'address' => 'Ritrovo per l\'Aurora Boreale, Islanda',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],

            // Day 7: Visita alla Penisola di Snæfellsnes
            [
                'day_id' => 45,
                'title' => 'Penisola di Snæfellsnes',
                'image' => 'https://viaggiadipiu.it/wp-content/uploads/2021/10/IMG_8636-e1635530130806.jpg',
                'foods' => null,
                'address' => 'Penisola di Snæfellsnes, Islanda',
                'latitude' => 64.9193,
                'longitude' => -23.7746
            ],
            [
                'day_id' => 45,
                'title' => 'Cascata Arnarstapi',
                'image' => 'https://media.istockphoto.com/id/1466706569/it/foto/cascate-sulla-spiaggia-di-arnarstapi.jpg?s=612x612&w=0&k=20&c=E7srNoVzEIt3wzS7rYxENJS32pxvbPhFZe2UEUk2J2A=',
                'foods' => null,
                'address' => 'Arnarstapi, 356 Snæfellsbær, Islanda',
                'latitude' => 64.7662,
                'longitude' => -23.6226
            ],
            [
                'day_id' => 45,
                'title' => 'Parco Nazionale di Snæfellsjökull',
                'image' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/6c/33/4e.jpg',
                'foods' => null,
                'address' => 'Parco Nazionale di Snæfellsjökull, Islanda',
                'latitude' => 64.7514,
                'longitude' => -23.7587
            ],

            // Day 8: Esplorazione del nord
            [
                'day_id' => 46,
                'title' => 'Visita ad Akureyri',
                'image' => 'https://www.akureyriguide.is/wp-content/uploads/2020/02/DJI_0038-1-1024x767.jpg',
                'foods' => null,
                'address' => 'Akureyri, Islanda',
                'latitude' => 65.6831,
                'longitude' => -18.1100
            ],
            [
                'day_id' => 46,
                'title' => 'Lago Mývatn',
                'image' => 'https://travelourplanet.com/wp-content/uploads/2022/02/Viti-Crater-or-Krafla-Crater-Lake-in-Late-Spring-Krafla-Caldera-Myvatn-Area-North-Iceland.jpg',
                'foods' => null,
                'address' => 'Lago Mývatn, Islanda',
                'latitude' => 65.6002,
                'longitude' => -17.0000
            ],
            [
                'day_id' => 46,
                'title' => 'Crateri di Hverfjall e Dimmuborgir',
                'image' => 'https://www.trekkaholic.it/media/images/Trekking-Islanda-Hverfjall-Dimmuborgir.jpg',
                'foods' => null,
                'address' => 'Hverfjall e Dimmuborgir, Islanda',
                'latitude' => 65.6413,
                'longitude' => -16.9981
            ],

            // Day 9: Giornata di relax
            [
                'day_id' => 47,
                'title' => 'Relax a Reykjavik',
                'image' => 'https://www.viaggipronti.it/wp-content/uploads/2022/09/iceland-g975655617_1920.jpg',
                'foods' => null,
                'address' => 'Reykjavik, Islanda',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],
            [
                'day_id' => 47,
                'title' => 'Shopping e passeggiata',
                'image' => 'https://media.tacdn.com/media/attractions-splice-spp-720x480/10/3f/b6/02.jpg',
                'foods' => null,
                'address' => 'Laugavegur, Reykjavik, Islanda',
                'latitude' => 64.1355,
                'longitude' => -21.8954
            ],
            [
                'day_id' => 47,
                'title' => 'Museo Nazionale d\'Islanda',
                'image' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/10/95/1d/ba.jpg',
                'foods' => null,
                'address' => 'Museo Nazionale d\'Islanda, Reykjavik, Islanda',
                'latitude' => 64.1428,
                'longitude' => -21.9223
            ],

            // Day 10: Ritorno
            [
                'day_id' => 48,
                'title' => 'Ritorno a casa',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Aeroporto di Keflavik, Islanda',
                'latitude' => 63.9850,
                'longitude' => -22.6056
            ],

            //? Giro della Toscana 
            // Day 1: Arrivo a Firenze
            [
                'day_id' => 49,
                'title' => 'Arrivo a Firenze',
                'image' => 'https://tourismmedia.italia.it/is/image/mitur/20210401173629-firenze-toscana-gettyimages-1145040590?wid=1600&hei=900&fit=constrain,1&fmt=webp',
                'foods' => null,
                'address' => 'Hotel Firenze, Piazza della Signoria, 50122 Firenze FI, Italia',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],
            [
                'day_id' => 49,
                'title' => 'Cena di benvenuto',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina tipica toscana',
                'address' => 'Ristorante Firenze, Via della Vigna Nuova, 50123 Firenze FI, Italia',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],
            [
                'day_id' => 49,
                'title' => 'Passeggiata serale',
                'image' => 'https://d3evrc0h48esvv.cloudfront.net//7448058/iStock-857440936.jpg?w=1440&h=1039&q=60&fm=jpg&t=1694438347542',
                'foods' => null,
                'address' => 'Piazza della Signoria, 50122 Firenze FI, Italia',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],

            // Day 2: Visita di Firenze
            [
                'day_id' => 50,
                'title' => 'Visita al Duomo di Firenze',
                'image' => 'https://www.shutterstock.com/image-photo/aerial-view-florence-cathedral-duomo-600nw-2373587937.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 50122 Firenze FI, Italia',
                'latitude' => 43.7731,
                'longitude' => 11.2559
            ],
            [
                'day_id' => 50,
                'title' => 'Galleria degli Uffizi',
                'image' => 'https://www.toscana.info/wp-content/uploads/sites/123/firenze-uffizi-galleria-hd.jpg',
                'foods' => null,
                'address' => 'Piazzale degli Uffizi, 50122 Firenze FI, Italia',
                'latitude' => 43.7666,
                'longitude' => 11.2556
            ],
            [
                'day_id' => 50,
                'title' => 'Passeggiata lungo l\'Arno',
                'image' => 'https://live.staticflickr.com/5217/5411852662_42bdbfa01d_b.jpg',
                'foods' => null,
                'address' => 'Ponte Vecchio, 50125 Firenze FI, Italia',
                'latitude' => 43.7678,
                'longitude' => 11.2536
            ],
            [
                'day_id' => 50,
                'title' => 'Pranzo a Firenze',
                'image' => 'https://latavernadelconte.com/wp-content/uploads/2022/04/ristorante-tipico-abruzzese-5.jpeg',
                'foods' => 'Piatti tipici fiorentini',
                'address' => 'Ristorante Firenze, Via dei Calzaiuoli, 50122 Firenze FI, Italia',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],

            // Day 3: Esplorazione di Siena
            [
                'day_id' => 51,
                'title' => 'Piazza del Campo',
                'image' => 'https://www.10cose.it/wp-content/uploads/2016/04/piazza-del-campo-siena-nove-spicchi.jpg',
                'foods' => null,
                'address' => 'Piazza del Campo, 53100 Siena SI, Italia',
                'latitude' => 43.3187,
                'longitude' => 11.3304
            ],
            [
                'day_id' => 51,
                'title' => 'Duomo di Siena',
                'image' => 'https://www.villadisotto.it/wp-content/uploads/2020/06/Duomo_di_Siena-dintorni.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 53100 Siena SI, Italia',
                'latitude' => 43.3187,
                'longitude' => 11.3305
            ],
            [
                'day_id' => 51,
                'title' => 'Pranzo a Siena',
                'image' => 'https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Specialità senesi',
                'address' => 'Ristorante Siena, Piazza del Campo, 53100 Siena SI, Italia',
                'latitude' => 43.3187,
                'longitude' => 11.3304
            ],
            [
                'day_id' => 51,
                'title' => 'Visita al Museo dell\'Opera',
                'image' => 'https://toscanasecrets.com/wp-content/uploads/2024/02/duomo-siena-museo-opera-toscana-secrets-26.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 53100 Siena SI, Italia',
                'latitude' => 43.3187,
                'longitude' => 11.3305
            ],

            // Day 4: Tour delle colline del Chianti
            [
                'day_id' => 52,
                'title' => 'Degustazione di vini del Chianti',
                'image' => 'https://www.winedering.com/uploads/travels/4749/thumb/tenutacasenuovedegustazionephstefanocasati03946.jpg.webp',
                'foods' => 'Vini locali e formaggi',
                'address' => 'Chianti, Toscana, Italia',
                'latitude' => 43.4371,
                'longitude' => 11.3284
            ],
            [
                'day_id' => 52,
                'title' => 'Visita a una cantina locale',
                'image' => 'https://podereigiganti.it/wp-content/uploads/2018/06/catine-in-toscana-cantina-petra-di-suvereto.jpg',
                'foods' => 'Pranzo con prodotti tipici',
                'address' => 'Cantina Chianti, Toscana, Italia',
                'latitude' => 43.4371,
                'longitude' => 11.3284
            ],
            [
                'day_id' => 52,
                'title' => 'Passeggiata tra i vigneti',
                'image' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/11/a9/28/2a.jpg',
                'foods' => null,
                'address' => 'Chianti, Toscana, Italia',
                'latitude' => 43.4371,
                'longitude' => 11.3284
            ],

            // Day 5: Visita a Pisa
            [
                'day_id' => 53,
                'title' => 'Torre di Pisa',
                'image' => 'https://www.tuscanypeople.com/wp-content/uploads/2016/03/torre_di_pisa.jpg',
                'foods' => null,
                'address' => 'Piazza dei Miracoli, 56126 Pisa PI, Italia',
                'latitude' => 43.7228,
                'longitude' => 10.3966
            ],
            [
                'day_id' => 53,
                'title' => 'Piazza dei Miracoli',
                'image' => 'https://tourismmedia.italia.it/is/image/mitur/20210310174409-shutterstock-353262566?wid=800&hei=500&fit=constrain,1&fmt=webp',
                'foods' => null,
                'address' => 'Piazza dei Miracoli, 56126 Pisa PI, Italia',
                'latitude' => 43.7228,
                'longitude' => 10.3966
            ],
            [
                'day_id' => 53,
                'title' => 'Pranzo a Pisa',
                'image' => 'https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Specialità pisane',
                'address' => 'Ristorante Pisa, Via Santa Maria, 56126 Pisa PI, Italia',
                'latitude' => 43.7228,
                'longitude' => 10.3966
            ],
            [
                'day_id' => 53,
                'title' => 'Museo dell\'Opera del Duomo',
                'image' => 'https://www.opapisa.it/wp-content/gallery/museoopera/MOD2020_SITO_13.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 56126 Pisa PI, Italia',
                'latitude' => 43.7228,
                'longitude' => 10.3966
            ],

            // Day 6: Visita a Lucca
            [
                'day_id' => 54,
                'title' => 'Passeggiata sulle mura di Lucca',
                'image' => 'https://lucca.guidatoscana.it/obj/image/blog/x/mura-di-lucca.jpeg',
                'foods' => null,
                'address' => 'Mura di Lucca, 55100 Lucca LU, Italia',
                'latitude' => 43.8438,
                'longitude' => 10.5075
            ],
            [
                'day_id' => 54,
                'title' => 'Visita al centro storico di Lucca',
                'image' => 'https://www.edreams.it/blog/wp-content/uploads/sites/7/2021/01/shutterstock_1257185803.jpg',
                'foods' => null,
                'address' => 'Centro Storico Lucca, 55100 Lucca LU, Italia',
                'latitude' => 43.8438,
                'longitude' => 10.5075
            ],
            [
                'day_id' => 54,
                'title' => 'Pranzo a Lucca',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Specialità lucchese',
                'address' => 'Ristorante Lucca, Piazza San Michele, 55100 Lucca LU, Italia',
                'latitude' => 43.8438,
                'longitude' => 10.5075
            ],

            // Day 7: Gita a San Gimignano
            [
                'day_id' => 55,
                'title' => 'Borgo medievale di San Gimignano',
                'image' => 'https://media.e-borghi.com/public/borghi/04_12_18-12_22_55-s11d7392a039a5e71f95ebf992e68949.jpg',
                'foods' => null,
                'address' => 'San Gimignano, 53037 Siena SI, Italia',
                'latitude' => 43.4671,
                'longitude' => 11.3298
            ],
            [
                'day_id' => 55,
                'title' => 'Collegiata di San Gimignano',
                'image' => 'https://www.lanostra.it/wp-content/uploads/2017/08/duomo-san-gimignano-basilica-santa-maria-assunta.jpg',
                'foods' => null,
                'address' => 'Piazza del Duomo, 53037 San Gimignano SI, Italia',
                'latitude' => 43.4671,
                'longitude' => 11.3298
            ],
            [
                'day_id' => 55,
                'title' => 'Pranzo a San Gimignano',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina toscana',
                'address' => 'Ristorante San Gimignano, Piazza della Cisterna, 53037 San Gimignano SI, Italia',
                'latitude' => 43.4671,
                'longitude' => 11.3298
            ],

            // Day 8: Ritorno
            [
                'day_id' => 56,
                'title' => 'Ritorno a Firenze',
                'image' => 'https://www.itabus.it/on/demandware.static/-/Sites-ITABUS-Library/default/dw979783bf/Destinazioni/Firenze/florence-or-firenze-sunset-aerial-cityscape-tuscan-PWYT8CR.jpg',
                'foods' => null,
                'address' => 'Hotel Firenze, Piazza della Signoria, 50122 Firenze FI, Italia',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],
            [
                'day_id' => 56,
                'title' => 'Preparativi per la partenza',
                'image' => 'https://img.grouponcdn.com/deal/36vM1vDUTwZBGVY82Xsvyo7VrKkS/36-1500x900/v1/t600x362.jpg',
                'foods' => null,
                'address' => 'Hotel Firenze, Piazza della Signoria, 50122 Firenze FI, Italia',
                'latitude' => 43.7696,
                'longitude' => 11.2558
            ],
            [
                'day_id' => 56,
                'title' => 'Partenza',
                'image' => 'https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => null,
                'address' => 'Aeroporto di Firenze, Via del Termine, 50127 Firenze FI, Italia',
                'latitude' => 43.8104,
                'longitude' => 11.2053
            ],

            //? Weekend a Londra
            // Day 1: Arrivo a Londra
            [
                'day_id' => 57,
                'title' => 'Arrivo a Londra',
                'image' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2017/03/unnamed1.jpg?v=1490116447',
                'foods' => null,
                'address' => 'Hotel Londra, 123 Baker Street, London NW1 6XE, UK',
                'latitude' => 51.5236,
                'longitude' => -0.1587
            ],
            [
                'day_id' => 57,
                'title' => 'Cena di benvenuto',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina britannica',
                'address' => 'The Ivy, 1-5 West Street, London WC2H 9NQ, UK',
                'latitude' => 51.5145,
                'longitude' => -0.1270
            ],
            [
                'day_id' => 57,
                'title' => 'Passeggiata serale',
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
                'title' => 'Pranzo in centro',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina britannica e internazionale',
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
                'title' => 'Pranzo nei pressi dei musei',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina britannica e continentale',
                'address' => 'The Great Court Restaurant, British Museum, Great Russell Street, London WC1B 3DG, UK',
                'latitude' => 51.5194,
                'longitude' => -0.1270
            ],
            [
                'day_id' => 59,
                'title' => 'Passeggiata a Covent Garden',
                'image' => 'https://image-tc.galaxy.tf/wijpeg-5as3kpt2zbbzzygipb2j4dndx/covent-garden_wide.jpg?crop=0%2C51%2C980%2C551',
                'foods' => null,
                'address' => 'Covent Garden, London WC2E 8RF, UK',
                'latitude' => 51.5123,
                'longitude' => -0.1228
            ],

            // Day 4: Ritorno
            [
                'day_id' => 60,
                'title' => 'Ultimo giro a Londra',
                'image' => 'https://www.mirygiramondo.com/wp-content/uploads/2021/08/londra-tower-bridge.jpg',
                'foods' => null,
                'address' => 'Hotel Londra, 123 Baker Street, London NW1 6XE, UK',
                'latitude' => 51.5236,
                'longitude' => -0.1587
            ],
            [
                'day_id' => 60,
                'title' => 'Preparativi per la partenza',
                'image' => 'https://www.terravision.eu/italiano/files/2015/09/gatwick1.jpg',
                'foods' => null,
                'address' => 'Hotel Londra, 123 Baker Street, London NW1 6XE, UK',
                'latitude' => 51.5236,
                'longitude' => -0.1587
            ],
            [
                'day_id' => 60,
                'title' => 'Partenza',
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
                'title' => 'Arrivo a New York',
                'image' => 'https://as1.ftcdn.net/v2/jpg/01/90/16/22/1000_F_190162235_kht4YkbpXqlBa2bnUB2qlWbvcZfH6t0g.jpg',
                'foods' => null,
                'address' => 'Hotel New York, 350 W 42nd St, New York, NY 10036, USA',
                'latitude' => 40.7580,
                'longitude' => -73.9855
            ],
            [
                'day_id' => 61,
                'title' => 'Cena di benvenuto',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina americana',
                'address' => 'Carmine\'s Italian Restaurant, 200 W 44th St, New York, NY 10036, USA',
                'latitude' => 40.7589,
                'longitude' => -73.9860
            ],

            // Day 2: Visita della città
            [
                'day_id' => 62,
                'title' => 'Times Square',
                'image' => 'https://www.example.com/images/times-square.jpg',
                'foods' => null,
                'address' => 'Times Square, New York, NY 10036, USA',
                'latitude' => 40.7580,
                'longitude' => -73.9855
            ],
            [
                'day_id' => 62,
                'title' => 'Central Park',
                'image' => 'https://www.example.com/images/central-park.jpg',
                'foods' => null,
                'address' => 'Central Park, New York, NY, USA',
                'latitude' => 40.7851,
                'longitude' => -73.9683
            ],
            [
                'day_id' => 62,
                'title' => 'Pranzo a Midtown',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina internazionale',
                'address' => 'The Modern, 9 W 53rd St, New York, NY 10019, USA',
                'latitude' => 40.7614,
                'longitude' => -73.9776
            ],

            // Day 3: Statua della Libertà
            [
                'day_id' => 63,
                'title' => 'Statua della Libertà',
                'image' => 'https://www.example.com/images/statue-of-liberty.jpg',
                'foods' => null,
                'address' => 'Liberty Island, New York, NY 10004, USA',
                'latitude' => 40.6892,
                'longitude' => -74.0445
            ],
            [
                'day_id' => 63,
                'title' => 'Ellis Island',
                'image' => 'https://www.example.com/images/ellis-island.jpg',
                'foods' => null,
                'address' => 'Ellis Island, New York, NY 10004, USA',
                'latitude' => 40.6992,
                'longitude' => -74.0390
            ],
            [
                'day_id' => 63,
                'title' => 'Pranzo a Battery Park',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina americana',
                'address' => 'Pier A Harbor House, 22 Battery Pl, New York, NY 10004, USA',
                'latitude' => 40.7074,
                'longitude' => -74.0167
            ],

            // Day 4: Musei e gallerie
            [
                'day_id' => 64,
                'title' => 'Museum of Modern Art (MoMA)',
                'image' => 'https://www.example.com/images/moma.jpg',
                'foods' => null,
                'address' => '11 W 53rd St, New York, NY 10019, USA',
                'latitude' => 40.7614,
                'longitude' => -73.9776
            ],
            [
                'day_id' => 64,
                'title' => 'American Museum of Natural History',
                'image' => 'https://www.example.com/images/natural-history-museum.jpg',
                'foods' => null,
                'address' => '200 Central Park West, New York, NY 10024, USA',
                'latitude' => 40.7813,
                'longitude' => -73.9733
            ],
            [
                'day_id' => 64,
                'title' => 'Pranzo a Upper West Side',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina internazionale',
                'address' => 'The Smith, 1900 Broadway, New York, NY 10023, USA',
                'latitude' => 40.7794,
                'longitude' => -73.9811
            ],

            // Day 5: Tour di Brooklyn
            [
                'day_id' => 65,
                'title' => 'Ponte di Brooklyn',
                'image' => 'https://www.example.com/images/brooklyn-bridge.jpg',
                'foods' => null,
                'address' => 'Brooklyn Bridge, New York, NY, USA',
                'latitude' => 40.7061,
                'longitude' => -73.9969
            ],
            [
                'day_id' => 65,
                'title' => 'Dumbo',
                'image' => 'https://www.example.com/images/dumbo.jpg',
                'foods' => null,
                'address' => 'DUMBO, Brooklyn, NY 11201, USA',
                'latitude' => 40.7040,
                'longitude' => -73.9903
            ],
            [
                'day_id' => 65,
                'title' => 'Pranzo a Brooklyn',
                'image' => 'https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina americana e internazionale',
                'address' => 'Juliana\'s Pizza, 19 Old Fulton St, Brooklyn, NY 11201, USA',
                'latitude' => 40.7039,
                'longitude' => -73.9944
            ],

            // Day 6: Visita a Harlem
            [
                'day_id' => 66,
                'title' => 'Esplorazione di Harlem',
                'image' => 'https://www.example.com/images/harlem.jpg',
                'foods' => null,
                'address' => 'Harlem, New York, NY, USA',
                'latitude' => 40.8116,
                'longitude' => -73.9465
            ],
            [
                'day_id' => 66,
                'title' => 'Tour Gospel',
                'image' => 'https://www.example.com/images/gospel-tour.jpg',
                'foods' => null,
                'address' => 'Abyssinian Baptist Church, 132 Odell Clark Pl, New York, NY 10030, USA',
                'latitude' => 40.8136,
                'longitude' => -73.9465
            ],
            [
                'day_id' => 66,
                'title' => 'Pranzo a Harlem',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina soul',
                'address' => 'Sylvia\'s, 328 Malcolm X Blvd, New York, NY 10027, USA',
                'latitude' => 40.8115,
                'longitude' => -73.9497
            ],

            // Day 7: Shopping sulla Fifth Avenue
            [
                'day_id' => 67,
                'title' => 'Fifth Avenue',
                'image' => 'https://www.example.com/images/fifth-avenue.jpg',
                'foods' => null,
                'address' => 'Fifth Avenue, New York, NY, USA',
                'latitude' => 40.7736,
                'longitude' => -73.9654
            ],
            [
                'day_id' => 67,
                'title' => 'Shopping da Saks Fifth Avenue',
                'image' => 'https://www.example.com/images/saks-fifth-avenue.jpg',
                'foods' => null,
                'address' => '611 5th Ave, New York, NY 10022, USA',
                'latitude' => 40.7590,
                'longitude' => -73.9763
            ],
            [
                'day_id' => 67,
                'title' => 'Pranzo a Midtown',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina internazionale',
                'address' => 'Le Bernardin, 155 W 51st St, New York, NY 10019, USA',
                'latitude' => 40.7616,
                'longitude' => -73.9825
            ],

            // Day 8: Ritorno
            [
                'day_id' => 68,
                'title' => 'Ultime ore a New York',
                'image' => 'https://www.example.com/images/new-york-last-hours.jpg',
                'foods' => null,
                'address' => 'Hotel New York, 350 W 42nd St, New York, NY 10036, USA',
                'latitude' => 40.7580,
                'longitude' => -73.9855
            ],
            [
                'day_id' => 68,
                'title' => 'Preparativi per la partenza',
                'image' => 'https://www.example.com/images/new-york-departure-prep.jpg',
                'foods' => null,
                'address' => 'Hotel New York, 350 W 42nd St, New York, NY 10036, USA',
                'latitude' => 40.7580,
                'longitude' => -73.9855
            ],
            [
                'day_id' => 68,
                'title' => 'Partenza',
                'image' => 'https://www.example.com/images/new-york-departure.jpg',
                'foods' => null,
                'address' => 'John F. Kennedy International Airport, Queens, NY 11430, USA',
                'latitude' => 40.6413,
                'longitude' => -73.7781
            ],

            //? Avventura in Australia
            // Day 1: Arrivo a Sydney
            [
                'day_id' => 69,
                'title' => 'Arrivo a Sydney',
                'image' => 'https://images-ext-1.discordapp.net/external/ryRKqe_C72HW4xWsu5RA9I8m53-nsv7tWoM179nj5uY/https/a.travel-assets.com/findyours-php/viewfinder/images/res70/474000/474772-Australia.jpg?format=webp&width=832&height=468',
                'foods' => null,
                'address' => 'Hotel Sydney, 123 George St, Sydney NSW 2000, Australia',
                'latitude' => -33.8688,
                'longitude' => 151.2093
            ],

            // Day 2: Visita di Sydney
            [
                'day_id' => 70,
                'title' => 'Sydney Opera House',
                'image' => 'https://www.example.com/images/sydney-opera-house.jpg',
                'foods' => null,
                'address' => 'Bennelong Point, Sydney NSW 2000, Australia',
                'latitude' => -33.8568,
                'longitude' => 151.2153
            ],
            [
                'day_id' => 70,
                'title' => 'Sydney Harbour Bridge',
                'image' => 'https://www.example.com/images/sydney-harbour-bridge.jpg',
                'foods' => null,
                'address' => 'Sydney NSW 2060, Australia',
                'latitude' => -33.8486,
                'longitude' => 151.2108
            ],
            [
                'day_id' => 70,
                'title' => 'Pranzo a Circular Quay',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina internazionale',
                'address' => 'Opera Bar, Bennelong Point, Sydney NSW 2000, Australia',
                'latitude' => -33.8568,
                'longitude' => 151.2153
            ],

            // Day 3: Gita alle Blue Mountains
            [
                'day_id' => 71,
                'title' => 'Blue Mountains',
                'image' => 'https://www.example.com/images/blue-mountains.jpg',
                'foods' => null,
                'address' => 'Blue Mountains, NSW, Australia',
                'latitude' => -33.7131,
                'longitude' => 150.3110
            ],
            [
                'day_id' => 71,
                'title' => 'Echo Point',
                'image' => 'https://www.example.com/images/echo-point.jpg',
                'foods' => null,
                'address' => 'Echo Point Lookout, Katoomba NSW 2780, Australia',
                'latitude' => -33.7244,
                'longitude' => 150.3119
            ],
            [
                'day_id' => 71,
                'title' => 'Pranzo a Katoomba',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina australiana',
                'address' => 'The Yellow Deli, 226 Katoomba St, Katoomba NSW 2780, Australia',
                'latitude' => -33.7318,
                'longitude' => 150.3121
            ],

            // Day 4: Visita alla Grande Barriera Corallina
            [
                'day_id' => 72,
                'title' => 'Grande Barriera Corallina',
                'image' => 'https://www.example.com/images/great-barrier-reef.jpg',
                'foods' => null,
                'address' => 'Great Barrier Reef, QLD, Australia',
                'latitude' => -18.2871,
                'longitude' => 147.6992
            ],
            [
                'day_id' => 72,
                'title' => 'Snorkeling al Reef',
                'image' => 'https://www.example.com/images/snorkeling-reef.jpg',
                'foods' => null,
                'address' => 'Great Barrier Reef, QLD, Australia',
                'latitude' => -18.2871,
                'longitude' => 147.6992
            ],
            [
                'day_id' => 72,
                'title' => 'Pranzo a Cairns',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina locale',
                'address' => 'Salt House, 6/2 Pier Point Rd, Cairns City QLD 4870, Australia',
                'latitude' => -16.9204,
                'longitude' => 145.7700
            ],

            // Day 5: Esplorazione di Cairns
            [
                'day_id' => 73,
                'title' => 'Foresta pluviale di Daintree',
                'image' => 'https://www.example.com/images/daintree-rainforest.jpg',
                'foods' => null,
                'address' => 'Daintree Rainforest, QLD, Australia',
                'latitude' => -16.1805,
                'longitude' => 145.3850
            ],
            [
                'day_id' => 73,
                'title' => 'Mossman Gorge',
                'image' => 'https://www.example.com/images/mossman-gorge.jpg',
                'foods' => null,
                'address' => 'Mossman Gorge Rd, Mossman QLD 4873, Australia',
                'latitude' => -16.3398,
                'longitude' => 145.3346
            ],
            [
                'day_id' => 73,
                'title' => 'Pranzo a Cairns',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina australiana',
                'address' => 'The Reef Hotel Casino, 35-41 Wharf St, Cairns City QLD 4870, Australia',
                'latitude' => -16.9200,
                'longitude' => 145.7737
            ],

            // Day 6: Gita a Uluru
            [
                'day_id' => 74,
                'title' => 'Uluru',
                'image' => 'https://www.example.com/images/uluru.jpg',
                'foods' => null,
                'address' => 'Uluru-Kata Tjuta National Park, NT, Australia',
                'latitude' => -25.3444,
                'longitude' => 131.0369
            ],
            [
                'day_id' => 74,
                'title' => 'Kata Tjuta',
                'image' => 'https://www.example.com/images/kata-tjuta.jpg',
                'foods' => null,
                'address' => 'Kata Tjuta, NT, Australia',
                'latitude' => -25.3574,
                'longitude' => 131.0449
            ],
            [
                'day_id' => 74,
                'title' => 'Pranzo al resort',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina australiana',
                'address' => 'Sails in the Desert, Yulara Dr, Yulara NT 0872, Australia',
                'latitude' => -25.2422,
                'longitude' => 130.9823
            ],

            // Day 7: Visita a Melbourne
            [
                'day_id' => 75,
                'title' => 'Quartieri artistici di Melbourne',
                'image' => 'https://www.example.com/images/melbourne-arts.jpg',
                'foods' => null,
                'address' => 'Fitzroy, Melbourne VIC 3065, Australia',
                'latitude' => -37.8009,
                'longitude' => 144.9804
            ],
            [
                'day_id' => 75,
                'title' => 'Great Ocean Road',
                'image' => 'https://www.example.com/images/great-ocean-road.jpg',
                'foods' => null,
                'address' => 'Great Ocean Road, VIC, Australia',
                'latitude' => -38.5827,
                'longitude' => 143.7618
            ],
            [
                'day_id' => 75,
                'title' => 'Pranzo a Melbourne',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina internazionale',
                'address' => 'Chin Chin, 125 Flinders Ln, Melbourne VIC 3000, Australia',
                'latitude' => -37.8180,
                'longitude' => 144.9671
            ],

            // Day 8: Esplorazione della Tasmania
            [
                'day_id' => 76,
                'title' => 'Parchi nazionali della Tasmania',
                'image' => 'https://www.example.com/images/tasmania-parks.jpg',
                'foods' => null,
                'address' => 'Tasmania, Australia',
                'latitude' => -42.0408,
                'longitude' => 147.4330
            ],
            [
                'day_id' => 76,
                'title' => 'Freycinet National Park',
                'image' => 'https://www.example.com/images/freycinet-park.jpg',
                'foods' => null,
                'address' => 'Freycinet National Park, TAS, Australia',
                'latitude' => -42.1741,
                'longitude' => 148.2805
            ],
            [
                'day_id' => 76,
                'title' => 'Pranzo a Hobart',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina locale',
                'address' => 'Franklin Wharf, Hobart TAS 7000, Australia',
                'latitude' => -42.8806,
                'longitude' => 147.3272
            ],

            // Day 9: Visita a Perth
            [
                'day_id' => 77,
                'title' => 'Perth City',
                'image' => 'https://www.example.com/images/perth-city.jpg',
                'foods' => null,
                'address' => 'Perth, WA, Australia',
                'latitude' => -31.9505,
                'longitude' => 115.8605
            ],
            [
                'day_id' => 77,
                'title' => 'Cottesloe Beach',
                'image' => 'https://www.example.com/images/cottesloe-beach.jpg',
                'foods' => null,
                'address' => 'Cottesloe Beach, WA, Australia',
                'latitude' => -31.9898,
                'longitude' => 115.7581
            ],
            [
                'day_id' => 77,
                'title' => 'Pranzo a Perth',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina internazionale',
                'address' => 'Wildflower, 1 Cathedral Ave, Perth WA 6000, Australia',
                'latitude' => -31.9535,
                'longitude' => 115.8605
            ],

            // Day 10: Ritorno
            [
                'day_id' => 78,
                'title' => 'Ultime ore a Sydney',
                'image' => 'https://www.example.com/images/sydney-last-hours.jpg',
                'foods' => null,
                'address' => 'Hotel Sydney, 123 George St, Sydney NSW 2000, Australia',
                'latitude' => -33.8688,
                'longitude' => 151.2093
            ],
            [
                'day_id' => 78,
                'title' => 'Preparativi per la partenza',
                'image' => 'https://www.example.com/images/sydney-departure-prep.jpg',
                'foods' => null,
                'address' => 'Hotel Sydney, 123 George St, Sydney NSW 2000, Australia',
                'latitude' => -33.8688,
                'longitude' => 151.2093
            ],
            [
                'day_id' => 78,
                'title' => 'Partenza',
                'image' => 'https://www.example.com/images/sydney-departure.jpg',
                'foods' => null,
                'address' => 'Sydney Airport, Mascot NSW 2020, Australia',
                'latitude' => -33.9399,
                'longitude' => 151.1753
            ],

            //? Tour dell'India del Nord
            // Day 1: Arrivo a Delhi
            [
                'day_id' => 79,
                'title' => 'Arrivo a Delhi',
                'image' => 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/474000/474772-Australia.jpg',
                'foods' => null,
                'address' => 'Hotel Delhi, Connaught Place, New Delhi, Delhi 110001, India',
                'latitude' => 28.6139,
                'longitude' => 77.2090
            ],

            // Day 2: Visita a Delhi
            [
                'day_id' => 80,
                'title' => 'Qutub Minar',
                'image' => 'https://www.example.com/images/qutub-minar.jpg',
                'foods' => null,
                'address' => 'Qutub Minar, Mehrauli, New Delhi, Delhi 110030, India',
                'latitude' => 28.5244,
                'longitude' => 77.1855
            ],
            [
                'day_id' => 80,
                'title' => 'India Gate',
                'image' => 'https://www.example.com/images/india-gate.jpg',
                'foods' => null,
                'address' => 'Rajpath, India Gate, New Delhi, Delhi 110001, India',
                'latitude' => 28.6139,
                'longitude' => 77.2297
            ],
            [
                'day_id' => 80,
                'title' => 'Pranzo a Delhi',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina indiana',
                'address' => 'Bukhara, ITC Maurya, Sardar Patel Road, New Delhi, Delhi 110021, India',
                'latitude' => 28.5537,
                'longitude' => 77.1658
            ],

            // Day 3: Visita ad Agra
            [
                'day_id' => 81,
                'title' => 'Taj Mahal',
                'image' => 'https://www.example.com/images/taj-mahal.jpg',
                'foods' => null,
                'address' => 'Dharmapuri, Forest Colony, Tajganj, Agra, Uttar Pradesh 282001, India',
                'latitude' => 27.1751,
                'longitude' => 78.0421
            ],
            [
                'day_id' => 81,
                'title' => 'Forte di Agra',
                'image' => 'https://www.example.com/images/agra-fort.jpg',
                'foods' => null,
                'address' => 'Agra Fort, Agra, Uttar Pradesh 282003, India',
                'latitude' => 27.1767,
                'longitude' => 78.0081
            ],
            [
                'day_id' => 81,
                'title' => 'Pranzo ad Agra',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina indiana',
                'address' => 'Peshawri, ITC Mughal, Taj East Gate Road, Agra, Uttar Pradesh 282001, India',
                'latitude' => 27.1770,
                'longitude' => 78.0211
            ],

            // Day 4: Visita a Jaipur
            [
                'day_id' => 82,
                'title' => 'Palazzo dei Venti',
                'image' => 'https://www.example.com/images/hawa-mahal.jpg',
                'foods' => null,
                'address' => 'Hawa Mahal, Badi Choupad, Jaipur, Rajasthan 302002, India',
                'latitude' => 26.2934,
                'longitude' => 75.5822
            ],
            [
                'day_id' => 82,
                'title' => 'Amber Fort',
                'image' => 'https://www.example.com/images/amber-fort.jpg',
                'foods' => null,
                'address' => 'Devisinghpura, Amer, Jaipur, Rajasthan 302001, India',
                'latitude' => 26.9855,
                'longitude' => 75.8514
            ],
            [
                'day_id' => 82,
                'title' => 'Pranzo a Jaipur',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina rajasthani',
                'address' => 'Suvarna Mahal, Rambagh Palace, Jaipur, Rajasthan 302005, India',
                'latitude' => 26.8802,
                'longitude' => 75.8054
            ],

            // Day 5: Safari al Ranthambore
            [
                'day_id' => 83,
                'title' => 'Parco Nazionale di Ranthambore',
                'image' => 'https://www.example.com/images/ranthambore-national-park.jpg',
                'foods' => null,
                'address' => 'Ranthambhore National Park, Sawai Madhopur, Rajasthan 322001, India',
                'latitude' => 26.0156,
                'longitude' => 76.7084
            ],
            [
                'day_id' => 83,
                'title' => 'Safari nel parco',
                'image' => 'https://www.example.com/images/ranthambore-safari.jpg',
                'foods' => null,
                'address' => 'Ranthambhore National Park, Sawai Madhopur, Rajasthan 322001, India',
                'latitude' => 26.0156,
                'longitude' => 76.7084
            ],
            [
                'day_id' => 83,
                'title' => 'Pranzo a Ranthambore',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina locale',
                'address' => 'The Oberoi Vanyavilas, Ranthambhore Road, Sawai Madhopur, Rajasthan 322001, India',
                'latitude' => 26.0177,
                'longitude' => 76.7025
            ],

            // Day 6: Esplorazione di Jodhpur
            [
                'day_id' => 84,
                'title' => 'Forte Mehrangarh',
                'image' => 'https://www.example.com/images/mehrangarh-fort.jpg',
                'foods' => null,
                'address' => 'Mehrangarh Fort, Jodhpur, Rajasthan 342006, India',
                'latitude' => 26.2956,
                'longitude' => 73.3080
            ],
            [
                'day_id' => 84,
                'title' => 'Jaswant Thada',
                'image' => 'https://www.example.com/images/jaswant-thada.jpg',
                'foods' => null,
                'address' => 'Jaswant Thada, Jodhpur, Rajasthan 342001, India',
                'latitude' => 26.2858,
                'longitude' => 73.0151
            ],
            [
                'day_id' => 84,
                'title' => 'Pranzo a Jodhpur',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina rajasthani',
                'address' => 'Indique, Pal Haveli, Jodhpur, Rajasthan 342001, India',
                'latitude' => 26.2922,
                'longitude' => 73.0169
            ],

            // Day 7: Visita a Udaipur
            [
                'day_id' => 85,
                'title' => 'Lago Pichola',
                'image' => 'https://www.example.com/images/lake-pichola.jpg',
                'foods' => null,
                'address' => 'Pichola Lake, Udaipur, Rajasthan 313001, India',
                'latitude' => 24.5767,
                'longitude' => 73.6785
            ],
            [
                'day_id' => 85,
                'title' => 'City Palace',
                'image' => 'https://www.example.com/images/city-palace-udaipur.jpg',
                'foods' => null,
                'address' => 'City Palace, Udaipur, Rajasthan 313001, India',
                'latitude' => 24.5798,
                'longitude' => 73.6916
            ],
            [
                'day_id' => 85,
                'title' => 'Pranzo a Udaipur',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina locale',
                'address' => 'Ambrai Restaurant, Amet Haveli, Udaipur, Rajasthan 313001, India',
                'latitude' => 24.5755,
                'longitude' => 73.6861
            ],

            // Day 8: Esplorazione di Varanasi
            [
                'day_id' => 86,
                'title' => 'Ghat del Gange',
                'image' => 'https://www.example.com/images/varanasi-ghat.jpg',
                'foods' => null,
                'address' => 'Dashashwamedh Ghat, Varanasi, Uttar Pradesh 221001, India',
                'latitude' => 25.2835,
                'longitude' => 82.9756
            ],
            [
                'day_id' => 86,
                'title' => 'Sarnath',
                'image' => 'https://www.example.com/images/sarnath.jpg',
                'foods' => null,
                'address' => 'Sarnath, Varanasi, Uttar Pradesh 221007, India',
                'latitude' => 25.3844,
                'longitude' => 82.8417
            ],
            [
                'day_id' => 86,
                'title' => 'Pranzo a Varanasi',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina locale',
                'address' => 'Kashi Chat Bhandar, Vishwanath Gali, Varanasi, Uttar Pradesh 221001, India',
                'latitude' => 25.2835,
                'longitude' => 82.9756
            ],

            // Day 9: Esplorazione di Khajuraho
            [
                'day_id' => 87,
                'title' => 'Templi di Khajuraho',
                'image' => 'https://www.example.com/images/khajuraho-temples.jpg',
                'foods' => null,
                'address' => 'Khajuraho, Madhya Pradesh 471606, India',
                'latitude' => 24.8320,
                'longitude' => 79.9190
            ],
            [
                'day_id' => 87,
                'title' => 'Pranzo a Khajuraho',
                'image' => 'https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'foods' => 'Cucina indiana',
                'address' => 'Raja Café, Khajuraho, Madhya Pradesh 471606, India',
                'latitude' => 24.8320,
                'longitude' => 79.9190
            ],

            // Day 10: Ritorno
            [
                'day_id' => 88,
                'title' => 'Ultime ore a Delhi',
                'image' => 'https://www.example.com/images/delhi-last-hours.jpg',
                'foods' => null,
                'address' => 'Hotel Delhi, Connaught Place, New Delhi, Delhi 110001, India',
                'latitude' => 28.6139,
                'longitude' => 77.2090
            ],
            [
                'day_id' => 88,
                'title' => 'Preparativi per la partenza',
                'image' => 'https://www.example.com/images/delhi-departure-prep.jpg',
                'foods' => null,
                'address' => 'Hotel Delhi, Connaught Place, New Delhi, Delhi 110001, India',
                'latitude' => 28.6139,
                'longitude' => 77.2090
            ],
            [
                'day_id' => 88,
                'title' => 'Partenza',
                'image' => 'https://www.example.com/images/delhi-departure.jpg',
                'foods' => null,
                'address' => 'Indira Gandhi International Airport, New Delhi, Delhi 110037, India',
                'latitude' => 28.5562,
                'longitude' => 77.1000
            ]
        ];




        foreach ($stops as $stop) {

            $new_stop = new Stop();
            $new_stop->fill($stop);
            $new_stop->save();
        }
    }
}

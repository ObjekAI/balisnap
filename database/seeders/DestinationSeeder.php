<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getDestinations() as $destination) {
            Destination::create([
                 ...$destination,
                'slug' => Str::slug($destination['name']),
            ]);
        }
    }

    private function getDestinations(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Tirta Empul',
                'description' => 'Tirta Empul is a famous Hindu Balinese water temple near Tampaksiring in central Bali, Indonesia. The temple is renowned for its sacred spring water, which Balinese Hindus believe has purifying properties. Visitors come to the temple to participate in a ritual bathing in the holy water, which flows through a series of fountains in the purification pool. The temple complex, built in 962 A.D., features traditional Balinese architecture and lush surroundings, offering a serene and spiritual atmosphere. Tirta Empul is also notable for its cultural and historical significance, attracting worshippers and tourists seeking to experience Balinese religious practices and heritage.',
                'latitude' => '-8.41542',
                'longitude' => '115.31538',
            ],
            [
                'id' => 2,
                'name' => 'Taman Dedari',
                'description' => "Taman Dedari is a picturesque park located in Ubud, Bali, known for its enchanting landscape and serene atmosphere. The park's name, \"Dedari,\" means \"angels\" in Balinese, reflecting the tranquil and ethereal beauty of the surroundings. Taman Dedari features lush gardens, artistic sculptures, and traditional Balinese architecture, creating a peaceful retreat for visitors. The park offers a perfect setting for leisurely walks, relaxation, and appreciating nature's beauty. It's a popular spot for both locals and tourists seeking a serene escape amidst the natural and cultural splendor of Bali",
                'latitude' => '-8.47491',
                'longitude' => '115.24507',
            ],
            [
                'id' => 3,
                'name' => 'Pura',
                'description' => "A Pura is a Balinese Hindu temple, central to the spiritual and cultural life of Bali, Indonesia. These temples, characterized by their unique architecture and elaborate stone carvings, serve as places of worship and communal rituals. Each pura is intricately designed with a series of courtyards and pavilions, often surrounded by lush landscapes and featuring iconic tiered shrines known as \"Meru.\" Puras are dedicated to various deities and natural elements, reflecting the Balinese belief in harmony between humans, nature, and the divine. They are not only religious sanctuaries but also important cultural landmarks, attracting both worshippers and tourists who seek to experience Bali's rich spiritual heritage",
                'latitude' => null,
                'longitude' => null,
            ],
            [
                'id' => 4,
                'name' => 'Handara',
                'description' => "Handara Bali Gate, or Handara Gate, is an iconic landmark in Bali known for its traditional architecture. Located in the Bedugul area, this gate serves as the entrance to Handara Golf & Resort Bali. The gate features two towering pillars adorned with intricate Balinese carvings, set against a backdrop of misty green mountains, creating a dramatic and magical atmosphere. It is a popular spot among tourists and photographers due to its beauty, offering a serene and peaceful ambiance far from the city's hustle and bustle. Handara Bali Gate is not only a stunning photo spot but also a symbol of the harmonious blend of Balinese architecture and natural beauty",
                'latitude' => '-8.25349',
                'longitude' => '115.15765',
            ],
            [
                'id' => 5,
                'name' => 'Garuda Wisnu Kencana',
                'description' => "Garuda Wisnu Kencana (GWK) is a cultural park and iconic monument located in Bukit Ungasan, Jimbaran, Bali. Designed by Nyoman Nuarta, this monument is one of the largest statues in the world, standing 121 meters tall, and depicting the god Vishnu riding the mythical bird Garuda. GWK serves not only as a tourist attraction but also as a cultural center showcasing various traditional Balinese performances. With its stunning architecture and spectacular views, GWK is a must-visit destination in Bali.",
                'latitude' => '-8.80676',
                'longitude' => '115.16733',
            ],
            [
                'id' => 6,
                'name' => 'Goa Gajah',
                'description' => "Goa Gajah, also known as the \"Elephant Cave,\" is an archaeological site and sacred historical place located in Bedulu village, near Ubud, Bali. Built in the 9th century, the cave served as a meditation site for Hindu priests. Its entrance features a carving of a large, gaping mouth. Inside, there is a statue of Ganesha and three lingas symbolizing the Trimurti: Brahma, Vishnu, and Shiva. The complex also includes an ancient bathing pool with statues of women pouring water. Surrounded by lush gardens and a tranquil atmosphere, Goa Gajah offers insights into Hindu-Buddhist culture and is a must-visit destination in Bali.",
                'latitude' => '-8.52317',
                'longitude' => '115.28711',
            ],
        ];
    }
}

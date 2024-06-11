<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getFoods() as $food) {
            Food::create($food);
        }
    }

    private function getFoods(): array
    {
        return [
            [
                'name' => 'Ayam Betutu',
                'description' => 'Ayam Betutu Bali is a traditional Balinese dish consisting of a whole chicken seasoned with Balinese spices, wrapped in banana leaves, and slowly cooked until tender and infused with flavors. This dish is known for its distinctive spicy and savory taste.',
            ],
            [
                'name' => 'Babi Guling',
                'description' => 'Babi Guling is a traditional Balinese dish featuring a whole pig seasoned with spices, roasted until the skin is crispy and the meat is tender. It is served with rice, lawar, and sambal, and is known for its savory and aromatic flavors.',
            ],
            [
                'name' => 'Nasi Jinggo',
                'description' => 'Nasi Jinggo is a Balinese dish featuring a small portion of rice wrapped in banana leaves, served with shredded chicken, fried noodles, sambal, and serundeng. It is known as a spicy and savory street food.',
            ],
            [
                'name' => 'Nasi Campur Bali',
                'description' => 'Nasi Campur Bali is a Balinese dish featuring white rice served with various side dishes like ayam betutu, sate lilit, lawar, egg, and sambal. It offers a variety of spicy, savory, and aromatic flavors typical of Bali.',
            ],
            [
                'name' => 'Sate Lilit',
                'description' => 'Sate Lilit is a traditional Balinese dish where minced meat, mixed with grated coconut, coconut milk, lime leaves, and spices, is wrapped around bamboo, lemongrass, or sugarcane sticks and grilled. This unique and aromatic satay variant reflects Bali\'s rich culinary traditions.',
            ],
            [
                'name' => 'Lawar',
                'description' => 'Lawar is a traditional Balinese dish of finely chopped meat (often pork or chicken), grated coconut, vegetables, herbs, and spices, sometimes enhanced with fresh blood for flavor and color. Known for its rich taste, it is commonly served at ceremonies and festivals, showcasing Bali\'s diverse culinary heritage.',
            ],
            [
                'name' => 'Rujak Kuah Pindang',
                'description' => 'Rujak Kuah Pindang is a distinctive Balinese fruit salad with a savory, spicy sauce made from fish broth, palm sugar, tamarind, shrimp paste, chili, and salt. This sauce is poured over fresh fruits like pineapple, mango, and cucumber, creating a unique and tangy flavor combination.',
            ],
        ];
    }
}

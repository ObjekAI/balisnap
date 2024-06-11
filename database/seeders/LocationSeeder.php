<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getLocations() as $location) {
            Location::create($location);
        }
    }

    private function getLocations(): array
    {
        return [
            [
                'name' => 'Ayam Betutu Khas Gilimanuk',
                'link' => 'https://maps.app.goo.gl/z7Tgp5pNrxSS5b7G9',
            ],
            [
                'name' => 'Ayam Betutu Men Tempeh',
                'link' => 'https://maps.app.goo.gl/MeX4Eg9qmEZjBF5A6',
            ],
            [
                'name' => 'Ayam Betutu Pak Man Kuta',
                'link' => 'https://maps.app.goo.gl/b3YRHa9NxbhowEaj8',
            ],
            [
                'name' => 'Babi Guling Pak Malen',
                'link' => 'https://maps.app.goo.gl/bSd1FA9GWvKthH358',
            ],
            [
                'name' => 'Warung Babi Guling Bu Dayu Kencani',
                'link' => 'https://maps.app.goo.gl/RQ1foH6Ly8rUPpba7',
            ],
            [
                'name' => 'Warung Babi Guling Sari Dewi Bp. Dobil',
                'link' => 'https://maps.app.goo.gl/MeX4Eg9qmEZjBF5A6',
            ],
            [
                'name' => 'Ayam Betutu Men Tempeh',
                'link' => 'https://maps.app.goo.gl/27jXTApCSzHAyhYu9',
            ],
            [
                'name' => 'Nasi Jinggo Om Gundul',
                'link' => 'https://maps.app.goo.gl/KwLhX1cXYMX3tbjG6',
            ],
            [
                'name' => 'Nasi Jinggo Wikowi',
                'link' => 'https://maps.app.goo.gl/WfauXC8R8mSdyWLQ9',
            ],
            [
                'name' => 'Warung Bandrek & Nasi Jinggo “Pak De”',
                'link' => 'https://maps.app.goo.gl/Y3ErXxuZHeAZyyiK6',
            ],
            [
                'name' => 'Warung Nasi Ayam Ibu Oki',
                'link' => 'https://maps.app.goo.gl/qRxaorQFFH7TWr7y8',
            ],
            [
                'name' => 'Rumah Makan Kedaton',
                'link' => 'https://maps.app.goo.gl/UENt6oqs3bLVAcda6',
            ],
            [
                'name' => 'Nasi Ayam Kedewatan Ibu Mangku-Renon (Cabang I)',
                'link' => 'https://maps.app.goo.gl/WBgdsU6R4ZpEyHvJ9',
            ],
            [
                'name' => 'Gourmet Sate House',
                'link' => 'https://maps.app.goo.gl/KFWN43fy9qoJ7vwA8',
            ],
            [
                'name' => 'Sari Alit Fish Satay Stall',
                'link' => 'https://maps.app.goo.gl/qYNfcQxe49vjt8U99',
            ],
            [
                'name' => 'Warung Ari',
                'link' => 'https://maps.app.goo.gl/d6QSoW2oDdowZnwSA',
            ],
            [
                'name' => 'Lawar Kuwir Men Koko',
                'link' => 'https://maps.app.goo.gl/CW1tsfzfRwtBoatD8',
            ],
            [
                'name' => 'Lawar Bali Kartika',
                'link' => 'https://maps.app.goo.gl/Pvh1NkSUUQAzqUmh7',
            ],
            [
                'name' => 'Warung Lawar Penatih',
                'link' => 'https://maps.app.goo.gl/bgUdBUrcABeqChwEA',
            ],
            [
                'name' => 'Warung Rujak Glogor',
                'link' => 'https://maps.app.goo.gl/Hg8PmM3V4TYazH6u5',
            ],
            [
                'name' => 'Warung Rujak Bali D\'Tepi Sawah',
                'link' => 'https://maps.app.goo.gl/53wRpMjpSyermUhPA',
            ],
            [
                'name' => 'Rujak Cafe / Warung De Rujak:',
                'link' => 'https://maps.app.goo.gl/UVtZvHDYmAmBc1H98',
            ],
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Mimin',
            'email' => 'admin@balisnap.com',
            'password' => Hash::make(env('ADMIN_PASSWORD', 'vaWKXW6qQo3rQa7bZBaI')),
        ]);
    }
}

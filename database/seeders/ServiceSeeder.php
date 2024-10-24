<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'id' => 1,
                'name' => 'Spotify',
                'description' => '',
                'icon' => 'icons/spotify.svg',
                'url' => 'https://spotify.com',
            ],
            [
                'id' => 2,
                'name' => 'Youtube',
                'description' => '',
                'icon' => 'icons/youtube.svg',
                'url' => 'https://youtube.com',
            ],
            [
                'id' => 3,
                'name' => 'Proton VPN',
                'description' => '',
                'icon' => 'icons/protonvpn.svg',
                'url' => 'https://protonvpn.com',
            ],
            [
                'id' => 4,
                'name' => 'Netflix',
                'description' => '',
                'icon' => 'icons/netflix.svg',
                'url' => 'https://netflix.com',
            ],
            [
                'id' => 5,
                'name' => 'Surfshark VPN',
                'description' => '',
                'icon' => 'icons/surfshark.svg',
                'url' => 'https://surfshark.com',
            ]
        ]);

        DB::table('service_plans')->insert([
            [
                'id' => 1,
                'service_id' => 1,
                'name' => 'Duo',
                'price' => 2790,
                'max_slots' => 2,
            ],
            [
                'id' => 2,
                'service_id' => 1,
                'name' => 'Family',
                'price' => 3490,
                'max_slots' => 6,
            ],
            [
                'id' => 3,
                'service_id' => 2,
                'name' => 'Duo',
                'price' => 4190,
                'max_slots' => 5,
            ],
            [
                'id' => 4,
                'service_id' => 2,
                'name' => 'Family',
                'price' => 4190,
                'max_slots' => 5,
            ],
            [
                'id' => 5,
                'service_id' => 3,
                'name' => 'Monthly',
                'price' => 3099,
                'max_slots' => 10,
            ],
            [
                'id' => 6,
                'service_id' => 4,
                'name' => 'Standard',
                'price' => 4490,
                'max_slots' => 2,
            ],
            [
                'id' => 7,
                'service_id' => 4,
                'name' => 'Premium',
                'price' => 5990,
                'max_slots' => 4,
            ],
            [
                'id' => 8,
                'service_id' => 5,
                'name' => 'Starter',
                'price' => 1099,
                'max_slots' => 10,
            ],
        ]);
    }
}

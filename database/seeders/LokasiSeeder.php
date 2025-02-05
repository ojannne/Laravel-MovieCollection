<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lokasi')->insert([
            [
                'name' => 'Cinema XXI Plaza Indonesia',
                'address' => 'Jl. M.H. Thamrin No.28-30',
                'city' => 'Jakarta',
                'state' => 'DKI Jakarta',
                'link_maps' => 'https://maps.app.goo.gl/PT6s8Pe1mJYxRq4G8',
                'zip_code' => '10350',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CGV Grand Indonesia',
                'address' => 'Jl. M.H. Thamrin No.1',
                'city' => 'Jakarta',
                'state' => 'DKI Jakarta',
                'link_maps' => 'https://maps.app.goo.gl/BZWsqBMVzQMznhYE7',
                'zip_code' => '10310',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cinepolis Plaza Senayan',
                'address' => 'Jl. Asia Afrika No.8',
                'city' => 'Jakarta',
                'state' => 'DKI Jakarta',
                'link_maps' => 'https://maps.app.goo.gl/3k8s8Pe1mJYxRq4G8',
                'zip_code' => '10270',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cinema XXI Trans Studio Mall Bandung',
                'address' => 'Jl. Gatot Subroto No.289',
                'city' => 'Bandung',
                'state' => 'Jawa Barat',
                'link_maps' => 'https://maps.app.goo.gl/4k8s8Pe1mJYxRq4G8',
                'zip_code' => '40273',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CGV Paris Van Java',
                'address' => 'Jl. Sukajadi No.137-139',
                'city' => 'Bandung',
                'state' => 'Jawa Barat',
                'link_maps' => 'https://maps.app.goo.gl/5k8s8Pe1mJYxRq4G8',
                'zip_code' => '40162',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cinepolis Plaza Renon',
                'address' => 'Jl. Raya Puputan No.210',
                'city' => 'Denpasar',
                'state' => 'Bali',
                'link_maps' => 'https://maps.app.goo.gl/6k8s8Pe1mJYxRq4G8',
                'zip_code' => '80234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cinema XXI Tunjungan Plaza',
                'address' => 'Jl. Basuki Rahmat No.8-12',
                'city' => 'Surabaya',
                'state' => 'Jawa Timur',
                'link_maps' => 'https://maps.app.goo.gl/7k8s8Pe1mJYxRq4G8',
                'zip_code' => '60261',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CGV Marvell City',
                'address' => 'Jl. Ngagel No.123',
                'city' => 'Surabaya',
                'state' => 'Jawa Timur',
                'link_maps' => 'https://maps.app.goo.gl/8k8s8Pe1mJYxRq4G8',
                'zip_code' => '60246',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cinepolis Lippo Plaza Jogja',
                'address' => 'Jl. Laksda Adisucipto No.32-34',
                'city' => 'Yogyakarta',
                'state' => 'DI Yogyakarta',
                'link_maps' => 'https://maps.app.goo.gl/9k8s8Pe1mJYxRq4G8',
                'zip_code' => '55221',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cinema XXI Ambarrukmo Plaza',
                'address' => 'Jl. Laksda Adisucipto No.80',
                'city' => 'Yogyakarta',
                'state' => 'DI Yogyakarta',
                'link_maps' => 'https://maps.app.goo.gl/0k8s8Pe1mJYxRq4G8',
                'zip_code' => '55281',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
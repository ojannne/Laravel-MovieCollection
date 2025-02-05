<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class KasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('kas')->insert([
                [
                    'name' => 'Inception',
                    'money' => 'Christopher Nolan',
                    'jumlah' => 'Science Fiction',
                    'foto' => 'img.png',
                ],
                [
                    'name' => 'The Matrix',
                    'money' => 'Lana Wachowski, Andy Wachowski',
                    'jumlah' => 'Action',
                    'foto' => 'img.png',
                ],
                [
                    'name' => 'Interstellar',
                    'money' => 'Christopher Nolan',
                    'jumlah' => 'Science Fiction',
                    'foto' => 'image.png',
                ],
                [
                    'name' => 'Kingsman: The Secret Service',
                    'money' => 'Matthew Vaughn',
                    'jumlah' => 'Action',
                    'foto' => 'img.png',
                ],
            ]);
        }
    }
}

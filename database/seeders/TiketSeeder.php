<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tiket')->insert([
            [
                'name' => 'Budi Santoso',
                'event' => 'Film A',
                'event_date' => '2024-12-01',
                'quantity' => 2,
                'price' => '150k', // Price with 'k' suffix
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Aminah',
                'event' => 'Film B',
                'event_date' => '2024-12-05',
                'quantity' => 4,
                'price' => '200k', // Price with 'k' suffix
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andi Wijaya',
                'event' => 'Film C',
                'event_date' => '2024-12-10',
                'quantity' => 1,
                'price' => '100k', // Price with 'k' suffix
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rina Sari',
                'event' => 'Film D',
                'event_date' => '2024-12-15',
                'quantity' => 3,
                'price' => '180k', // Price with 'k' suffix
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dewi Lestari',
                'event' => 'Film E',
                'event_date' => '2024-12-20',
                'quantity' => 5,
                'price' => '250k', // Price with 'k' suffix
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
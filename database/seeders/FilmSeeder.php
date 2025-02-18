<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('film')->insert([
                [
                    'nama' => 'Inception',
                    'sutradara' => 'Christopher Nolan',
                    'genre' => 'Science Fiction',
                    'release_date' => '2010-07-16',
                    'rating' => 8.8,
                ],
                [
                    'nama' => 'The Matrix',
                    'sutradara' => 'Lana Wachowski, Andy Wachowski',
                    'genre' => 'Action',
                    'release_date' => '1999-03-31',
                    'rating' => 8.7,
                ],
                [
                    'nama' => 'Interstellar',
                    'sutradara' => 'Christopher Nolan',
                    'genre' => 'Science Fiction',
                    'release_date' => '2014-11-07',
                    'rating' => 8.6,
                ],
                [
                    'nama' => 'Kingsman: The Secret Service',
                    'sutradara' => 'Matthew Vaughn',
                    'genre' => 'Action',
                    'release_date' => '2015-02-13',
                    'rating' => 8.7,
                ],
            ]);
        }
    }
}

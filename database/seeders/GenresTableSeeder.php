<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $genres = [
            ['id' => 1, 'name' => 'Azione'],
            ['id' => 2, 'name' => 'Avventura'],
            ['id' => 3, 'name' => 'Fantasy'],
            ['id' => 4, 'name' => 'Sci-Fi'],
            ['id' => 5, 'name' => 'Drama'],
            ['id' => 6, 'name' => 'Romance'],
            ['id' => 7, 'name' => 'Slice of Life'],
            ['id' => 8, 'name' => 'Thriller'],
            ['id' => 9, 'name' => 'Sport'],
            ['id' => 10, 'name' => 'Psicologico'],
        ];


        foreach ($genres as $genre) {

            $newGenre = new Genre();

            $newGenre->name = $genre['name'];

            $newGenre->save();
        }
    }
}

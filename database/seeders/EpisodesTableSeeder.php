<?php

namespace Database\Seeders;

use App\Models\Anime;
use App\Models\Episode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        $animeList = Anime::all();


        foreach ($animeList as $anime) {

            for ($i = 0; $i < 20; $i++) {

                $newEpisode = new Episode();

                $newEpisode->anime_id = $anime->id;
                $newEpisode->number = $i + 1;
                $newEpisode->title = $faker->sentence(3);
                $newEpisode->plot = $faker->paragraph();
                $newEpisode->cover = $faker->sentence();
                $newEpisode->duration = $faker->numberBetween(24, 30);

                $newEpisode->save();
            }
        }
    }
}

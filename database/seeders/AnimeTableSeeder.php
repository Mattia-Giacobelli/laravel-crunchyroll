<?php

namespace Database\Seeders;

use App\Models\Anime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $animeList = [
            [
                'original_name' => 'Fullmetal Alchemist: Brotherhood',
                'name' => 'Fullmetal Alchemist: Brotherhood',
                'plot' => 'Due fratelli cercano la Pietra Filosofale per recuperare i loro corpi dopo un esperimento alchemico fallito.',
                'cover' => 'https://example.com/covers/fma_brotherhood.jpg',
                'animation_studio_id' => 6,
                'type_id' => 1,
                'episodes' => 64,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2009-04-05',
                'end_date' => '2010-07-04',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 2, 3, 5], // Azione, Avventura, Fantasy, Drama
            ],
            [
                'original_name' => 'Shingeki no Kyojin',
                'name' => 'L\'Attacco dei Giganti',
                'plot' => 'L\'umanità vive rinchiusa tra enormi mura per proteggersi dai Giganti, creature mangia-uomini.',
                'cover' => 'https://example.com/covers/aot.jpg',
                'animation_studio_id' => 8,
                'type_id' => 1,
                'episodes' => 87,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2013-04-07',
                'end_date' => '2023-11-04',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 3, 5, 10], // Azione, Fantasy, Drama, Psicologico
            ],
            [
                'original_name' => 'Death Note',
                'name' => 'Death Note',
                'plot' => 'Uno studente liceale trova un quaderno capace di uccidere chiunque il cui nome venga scritto sopra.',
                'cover' => 'https://example.com/covers/death_note.jpg',
                'animation_studio_id' => 4,
                'type_id' => 1,
                'episodes' => 37,
                'episodes_duration' => 23,
                'vote' => 8,
                'release_date' => '2006-10-04',
                'end_date' => '2007-06-27',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [8, 10], // Thriller, Psicologico
            ],
            [
                'original_name' => 'Bleach',
                'name' => 'Bleach',
                'plot' => 'Ichigo Kurosaki ottiene i poteri di uno Shinigami e deve proteggere il mondo dagli spiriti maligni.',
                'cover' => 'https://example.com/covers/bleach.jpg',
                'animation_studio_id' => 11,
                'type_id' => 1,
                'episodes' => 366,
                'episodes_duration' => 24,
                'vote' => 8,
                'release_date' => '2004-10-05',
                'end_date' => '2012-03-27',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 2, 3], // Azione, Avventura, Fantasy
            ],
            [
                'original_name' => 'Kimetsu no Yaiba',
                'name' => 'Demon Slayer',
                'plot' => 'Tanjiro diventa un cacciatore di demoni per salvare sua sorella trasformata in mostro.',
                'cover' => 'https://example.com/covers/demon_slayer.jpg',
                'animation_studio_id' => 3,
                'type_id' => 1,
                'episodes' => 26,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2019-04-06',
                'end_date' => '2019-09-28',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 3], // Azione, Fantasy
            ],
            [
                'original_name' => 'One Piece',
                'name' => 'One Piece',
                'plot' => 'Monkey D. Luffy e la sua ciurma viaggiano per i mari alla ricerca del tesoro leggendario.',
                'cover' => 'https://example.com/covers/one_piece.jpg',
                'animation_studio_id' => 7,
                'type_id' => 1,
                'episodes' => 1100,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '1999-10-20',
                'end_date' => '2026-12-31',
                'completed' => false,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 2, 3], // Azione, Avventura, Fantasy
            ],
            [
                'original_name' => 'Black Clover',
                'name' => 'Black Clover',
                'plot' => 'In un mondo di magia, Asta è l\'unico nato senza poteri e punta a diventare il Re dei Maghi.',
                'cover' => 'https://example.com/covers/black_clover.jpg',
                'animation_studio_id' => 11,
                'type_id' => 1,
                'episodes' => 170,
                'episodes_duration' => 24,
                'vote' => 8,
                'release_date' => '2017-10-03',
                'end_date' => '2021-03-30',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [3],
                'genres' => [1, 3], // Azione, Fantasy
            ],
            [
                'original_name' => 'Plastic Memories',
                'name' => 'Plastic Memories',
                'plot' => 'In un futuro prossimo, un ragazzo lavora nel recupero di androidi quasi umani giunti a fine vita.',
                'cover' => 'https://example.com/covers/plastic_memories.jpg',
                'animation_studio_id' => 16,
                'type_id' => 1,
                'episodes' => 13,
                'episodes_duration' => 24,
                'vote' => 8,
                'release_date' => '2015-04-05',
                'end_date' => '2015-06-28',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [],
                'genres' => [4, 5, 6], // Sci-Fi, Drama, Romance
            ],
            [
                'original_name' => 'Sono Bisque Doll wa Koi wo Suru',
                'name' => 'My Dress-Up Darling',
                'plot' => 'Un artigiano di bambole e una ragazza popolare stringono un legame grazie alla passione per il cosplay.',
                'cover' => 'https://example.com/covers/dress_up_darling.jpg',
                'animation_studio_id' => 17,
                'type_id' => 1,
                'episodes' => 12,
                'episodes_duration' => 24,
                'vote' => 8,
                'release_date' => '2022-01-09',
                'end_date' => '2022-03-27',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [6, 7], // Romance, Slice of Life
            ],
            [
                'original_name' => 'Steins;Gate',
                'name' => 'Steins;Gate',
                'plot' => 'Un gruppo di amici inventa accidentalmente un sistema per inviare messaggi nel passato.',
                'cover' => 'https://example.com/covers/steins_gate.jpg',
                'animation_studio_id' => 12,
                'type_id' => 1,
                'episodes' => 24,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2011-04-06',
                'end_date' => '2011-09-14',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [4, 8, 10], // Sci-Fi, Thriller, Psicologico
            ],
            [
                'original_name' => 'Boku no Hero Academia',
                'name' => 'My Hero Academia',
                'plot' => 'In un mondo dove quasi tutti hanno superpoteri, un ragazzo nato senza cerca di diventare un eroe.',
                'cover' => 'https://example.com/covers/mha.jpg',
                'animation_studio_id' => 6,
                'type_id' => 1,
                'episodes' => 138,
                'episodes_duration' => 24,
                'vote' => 7,
                'release_date' => '2016-04-03',
                'end_date' => '2024-10-01',
                'completed' => false,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 3], // Azione, Fantasy
            ],
            [
                'original_name' => 'Cowboy Bebop',
                'name' => 'Cowboy Bebop',
                'plot' => 'Le avventure di un gruppo di cacciatori di taglie spaziali nel futuro.',
                'cover' => 'https://example.com/covers/bebop.jpg',
                'animation_studio_id' => 9,
                'type_id' => 1,
                'episodes' => 26,
                'episodes_duration' => 25,
                'vote' => 10,
                'release_date' => '1998-04-03',
                'end_date' => '1999-04-24',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 2, 4], // Azione, Avventura, Sci-Fi
            ],
            [
                'original_name' => 'Jujutsu Kaisen',
                'name' => 'Jujutsu Kaisen',
                'plot' => 'Un ragazzo ingoia un dito maledetto per proteggere i suoi amici e finisce in un mondo di stregoneria.',
                'cover' => 'https://example.com/covers/jjk.jpg',
                'animation_studio_id' => 2,
                'type_id' => 1,
                'episodes' => 47,
                'episodes_duration' => 24,
                'vote' => 8,
                'release_date' => '2020-10-03',
                'end_date' => '2023-12-28',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 3], // Azione, Fantasy
            ],
            [
                'original_name' => 'Sen to Chihiro no Kamikakushi',
                'name' => 'La Città Incantata',
                'plot' => 'Chihiro finisce in un mondo magico governato da una strega e deve salvare i suoi genitori.',
                'cover' => 'https://example.com/covers/spirited_away.jpg',
                'animation_studio_id' => 1,
                'type_id' => 2,
                'episodes' => 1,
                'episodes_duration' => 125,
                'vote' => 10,
                'release_date' => '2001-07-20',
                'end_date' => '2001-07-20',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [2, 3, 5], // Avventura, Fantasy, Drama
            ],
            [
                'original_name' => 'Neon Genesis Evangelion',
                'name' => 'Neon Genesis Evangelion',
                'plot' => 'Adolescenti pilotano enormi robot per proteggere la Terra da esseri misteriosi.',
                'cover' => 'https://example.com/covers/eva.jpg',
                'animation_studio_id' => 13,
                'type_id' => 1,
                'episodes' => 26,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '1995-10-04',
                'end_date' => '1996-03-27',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 4, 10], // Azione, Sci-Fi, Psicologico
            ],
            [
                'original_name' => 'Hunter x Hunter (2011)',
                'name' => 'Hunter x Hunter',
                'plot' => 'Gon vuole diventare un Hunter per ritrovare suo padre, affrontando prove pericolosissime.',
                'cover' => 'https://example.com/covers/hxh.jpg',
                'animation_studio_id' => 4,
                'type_id' => 1,
                'episodes' => 148,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2011-10-02',
                'end_date' => '2014-09-24',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [3],
                'genres' => [1, 2, 3], // Azione, Avventura, Fantasy
            ],
            [
                'original_name' => 'Code Geass: Hangyaku no Lelouch',
                'name' => 'Code Geass',
                'plot' => 'Un principe esiliato ottiene il potere dell\'obbedienza assoluta e guida una rivolta.',
                'cover' => 'https://example.com/covers/code_geass.jpg',
                'animation_studio_id' => 9,
                'type_id' => 1,
                'episodes' => 50,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2006-10-06',
                'end_date' => '2008-09-28',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 4, 5, 10], // Azione, Sci-Fi, Drama, Psicologico
            ],
            [
                'original_name' => 'Vinland Saga',
                'name' => 'Vinland Saga',
                'plot' => 'Il giovane Thorfinn cerca vendetta contro l\'assassino di suo padre in un contesto vichingo.',
                'cover' => 'https://example.com/covers/vinland.jpg',
                'animation_studio_id' => 2,
                'type_id' => 1,
                'episodes' => 48,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2019-07-07',
                'end_date' => '2023-06-20',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 2, 5], // Azione, Avventura, Drama
            ],
            [
                'original_name' => 'Mob Psycho 100',
                'name' => 'Mob Psycho 100',
                'plot' => 'Un potente esper cerca di vivere una vita normale nonostante i suoi enormi poteri.',
                'cover' => 'https://example.com/covers/mob.jpg',
                'animation_studio_id' => 6,
                'type_id' => 1,
                'episodes' => 37,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2016-07-11',
                'end_date' => '2022-12-22',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [1, 7, 10], // Azione, Slice of Life, Psicologico
            ],
            [
                'original_name' => 'Violet Evergarden',
                'name' => 'Violet Evergarden',
                'plot' => 'Una ex soldatessa cerca di capire il significato della parola "amore".',
                'cover' => 'https://example.com/covers/violet.jpg',
                'animation_studio_id' => 5,
                'type_id' => 1,
                'episodes' => 13,
                'episodes_duration' => 24,
                'vote' => 9,
                'release_date' => '2018-01-11',
                'end_date' => '2018-04-05',
                'completed' => true,
                'dub_languages' => [1, 2, 3],
                'sub_languages' => [2, 3],
                'genres' => [5, 6, 7], // Drama, Romance, Slice of Life
            ],
        ];

        foreach ($animeList as $anime) {

            $newAnime = new Anime();

            $newAnime->original_name = $anime['original_name'];
            $newAnime->name = $anime['name'];
            $newAnime->plot = $anime['plot'];
            $newAnime->cover = $anime['cover'];
            $newAnime->animation_studio_id = $anime['animation_studio_id'];
            $newAnime->type_id = $anime['type_id'];
            $newAnime->episodes = $anime['episodes'];
            $newAnime->episodes_duration = $anime['episodes_duration'];
            $newAnime->vote = $anime['vote'];
            $newAnime->release_date = $anime['release_date'];
            $newAnime->end_date = $anime['end_date'];
            $newAnime->completed = $anime['completed'];

            $newAnime->save();

            $newAnime->subs()->attach($anime['sub_languages']);
            $newAnime->dubs()->attach($anime['dub_languages']);
            $newAnime->genres()->attach($anime['genres']);
        }
    }
}

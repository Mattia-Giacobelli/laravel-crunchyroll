<?php

namespace Database\Seeders;

use App\Models\AnimationStudio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimationStudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $animation_studios = [
            ['id' => 1, 'name' => 'Studio Ghibli'],
            ['id' => 2, 'name' => 'MAPPA'],
            ['id' => 3, 'name' => 'Ufotable'],
            ['id' => 4, 'name' => 'Madhouse'],
            ['id' => 5, 'name' => 'Kyoto Animation'],
            ['id' => 6, 'name' => 'Bones'],
            ['id' => 7, 'name' => 'Toei Animation'],
            ['id' => 8, 'name' => 'Wit Studio'],
            ['id' => 9, 'name' => 'Sunrise'],
            ['id' => 10, 'name' => 'Production I.G'],
            ['id' => 11, 'name' => 'Pierrot'],
            ['id' => 12, 'name' => 'White Fox'],
            ['id' => 13, 'name' => 'Gainax'],
            ['id' => 14, 'name' => 'CoMix Wave Films'],
            ['id' => 15, 'name' => 'Trigger'],
            ['id' => 16, 'name' => 'Doga Kobo'],
            ['id' => 17, 'name' => 'CloverWorks'],
        ];


        foreach ($animation_studios as $studio) {

            $newStudio = new AnimationStudio();

            $newStudio->name = $studio['name'];

            $newStudio->save();
        }
    }
}

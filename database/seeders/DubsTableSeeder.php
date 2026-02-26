<?php

namespace Database\Seeders;

use App\Models\Dub;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $languages = [
            ['id' => 1, 'name' => 'Giapponese', 'iso_code' => 'JA'],
            ['id' => 2, 'name' => 'Italiano', 'iso_code' => 'IT'],
            ['id' => 3, 'name' => 'Inglese', 'iso_code' => 'EN'],
            ['id' => 4, 'name' => 'Francese', 'iso_code' => 'FR'],
            ['id' => 5, 'name' => 'Tedesco', 'iso_code' => 'DE'],
            ['id' => 6, 'name' => 'Spagnolo', 'iso_code' => 'ES'],
        ];


        foreach ($languages as $lang) {

            $newLang = new Dub();

            $newLang->language = $lang['name'];
            $newLang->iso_code = $lang['iso_code'];

            $newLang->save();
        }
    }
}

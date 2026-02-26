<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = [
            ['id' => 1, 'name' => 'Serie TV'],
            ['id' => 2, 'name' => 'Film'],
            ['id' => 3, 'name' => 'OAV'],
            ['id' => 4, 'name' => 'Special'],
        ];


        foreach ($types as $type) {

            $newType = new Type();

            $newType->name = $type['name'];

            $newType->save();
        }
    }
}

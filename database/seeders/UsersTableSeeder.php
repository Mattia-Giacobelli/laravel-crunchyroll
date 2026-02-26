<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $newUser = new User();

        $newUser->name = 'mattia';
        $newUser->email = 'mattia@admin.com';
        $newUser->password = Hash::make('banana33');

        $newUser->save();
    }
}

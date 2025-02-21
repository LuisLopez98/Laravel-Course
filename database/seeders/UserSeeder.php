<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user =  new User();

        $user->name = 'Luis Lopez';
        $user->email = 'joselopezm9809@gmail.com';
        $user->password = bcrypt('12345678');

        $user->save();

        User::factory(10)->create();

    }
}

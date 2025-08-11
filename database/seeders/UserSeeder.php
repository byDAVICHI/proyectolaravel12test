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
        $user = new User();

        $user->name = 'David';
        $user->email = 'david@gmail.com';
        $user->password = bcrypt('12345678');
        $user->avatar = 'https://www.gravatar.com/avatar/';
        $user->firma = 'hola';
        $user->save();

        $user = new User();

        $user->name = 'Miguel';
        $user->email = 'miguel@gmail.com';
        $user->password = bcrypt('12345678');
        $user->avatar = 'https://www.gravatar.com/avatar/';
        $user->firma = 'hola';
        $user->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Jesús García Valadez',
            'email' => 'jesus.garciav'.\Str::random(10).'@me.com',
            'password' => \Hash::make('password'),
            'photo' => 'https://avatars3.githubusercontent.com/u/1066733',
            'title' => 'Senior Software Engineer II',
            'country' => 'Mexico',
            'years_of_experience' => 11,
            'titles' => 'Front-end developer, Back-end developer',
            'offering' => 'I love software development',
        ]);
        User::factory(9)->create();
    }
}

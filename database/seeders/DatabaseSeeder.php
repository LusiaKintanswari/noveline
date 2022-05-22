<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Home;
use App\Models\Book;
use App\Models\User;
use App\Models\Library;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Author::factory(5)->create();
        Book::factory(20)->create();
        User::factory(10)->create();
        Library::factory(20)->create();
        
        Genre::create([
            'name' => "Romance Drama",
            'slug' => "romance-drama"
        ]);
        Genre::create([
            'name' => "Fantacy",
            'slug' => "fantacy"
        ]);
        Genre::create([
            'name' => "Comedi",
            'slug' => "comedi"
        ]);
        
        Home::create([
            'type' => "Favorites"
        ]);
        Home::create([
            'type' => "New"
        ]);
        Home::create([
            'type' => "For You"
        ]);


    }
}

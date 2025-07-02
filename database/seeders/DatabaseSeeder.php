<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Genre;
use App\Models\Movie;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@test.com',
        ]);
        
        Genre::factory(10)->create();
        Movie::factory(10)->create();

        $genres = Genre::all();
        $movies = Movie::all();

        foreach ($movies as $movie) {
            $movie->genres()->attach($genres->random(rand(1, 3))->pluck('id'));
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['action', 'comedy', 'drama', 'fantasy', 'harem', 'horror', 'isekai', 'magic', 'mystery', 'romance', 'regression', 'slice of life', 'martial arts', 'shounen', 'shoujo', 'sports'];

        foreach($genres as $genre){
            Genre::create([
                'name' => $genre
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['ongoing', 'completed', 'hiatus'];
        $types = ['manga', 'manhwa', 'manhua'];
        $genres = ['action', 'comedy', 'drama', 'fantasy', 'harem', 'horror', 'isekai', 'magic', 'mystery', 'romance', 'regression', 'slice of life', 'martial arts', 'shounen', 'shoujo', 'sports'];

        for ($x = 0; $x <20; $x++)
        {
            Comic::create([
                'title' => fake()->sentence(3),
                'aliases' => json_encode([
                    fake()->sentence(3),
                    fake()->sentence(3),
                    fake()->sentence(3),
                ]),
                'author' => fake()->name(),
                'genre' => fake()->randomElement($genres),
                'status' => fake()->randomElement($statuses),
                'type' => fake()->randomElement($types),
                'description' => fake()->paragraph(),
                'published_at' => fake()->dateTime('2025-09-21')
            ]);
        }
    }
}

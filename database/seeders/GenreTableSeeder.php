<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert noval,story,poetry,essay,biography,autobiography,science fiction,horror,thriller,romance,comedy,action,adventure,fantasy,history,religion,spirituality,philosophy,psychology,science,nature,technology,mathematics,medicine,engineering,art,photography,music,cooking,craft,hobby,health,fitness,travel,children,teen,adult,education,reference
        $genres = [
            'noval',
            'story',
            'poetry',
            'essay',
            'biography',
            'autobiography',
            'science fiction',
            'horror',
            'thriller',
            'romance',
            'comedy',
            'action',
            'adventure',
            'fantasy',
            'history',
            'religion',
            'spirituality',
            'philosophy',
            'psychology',
            'science',
            'nature',
            'technology',
            'mathematics',
            'medicine',
            'engineering',
            'art',
            'photography',
            'music',
            'cooking',
            'craft',
            'hobby',
            'health',
            'fitness',
            'travel',
            'children',
            'teen',
            'adult',
            'education',
            'reference',
        ];
        Genre::insert(array_map(fn ($name) => ['name' => $name], $genres));
    }
}

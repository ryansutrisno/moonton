<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Batman',
                'slug' => 'the-batman',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=mqqft2x_Aa4',
                'thumbnail' => 'https://unsplash.com/photos/meqVd5zwylI',
                'rating' => 8.5,
                'is_featured' => 1
            ],
            [
                'name' => 'Superman is Dead',
                'slug' => 'superman-is-dead',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=lcjJSuRDhmQ',
                'thumbnail' => 'https://unsplash.com/photos/6RcT6zEmm9A',
                'rating' => 7.5,
                'is_featured' => 0
            ],
            [
                'name' => 'The GoodFather',
                'slug' => 'the-goodfather',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=UaVTIH8mujA',
                'thumbnail' => 'https://unsplash.com/photos/2uwFEAGUm6E',
                'rating' => 9.0,
                'is_featured' => 0
            ]
        ];

        Movie::insert($movies);
    }
}

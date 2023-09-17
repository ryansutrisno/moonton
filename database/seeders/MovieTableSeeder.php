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
                'thumbnail' => 'https://images.unsplash.com/photo-1509347528160-9a9e33742cdb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3570&q=80',
                'rating' => 4.5,
                'is_featured' => 1
            ],
            [
                'name' => 'Superman is Dead',
                'slug' => 'superman-is-dead',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=lcjJSuRDhmQ',
                'thumbnail' => 'https://images.unsplash.com/photo-1594344041337-0223bd103abe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3456&q=80',
                'rating' => 4.3,
                'is_featured' => 0
            ],
            [
                'name' => 'The GoodFather',
                'slug' => 'the-goodfather',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=UaVTIH8mujA',
                'thumbnail' => 'https://images.unsplash.com/photo-1440404653325-ab127d49abc1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3570&q=80',
                'rating' => 4.0,
                'is_featured' => 0
            ]
        ];

        Movie::insert($movies);
    }
}

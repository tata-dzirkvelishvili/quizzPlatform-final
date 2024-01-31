<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\QuizController;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run() {
        Quiz::truncate();

        Quiz::create([
            'name' => 'PHP Quiz1',
            'main_photo' => 'https://st5.depositphotos.com/18433260/64929/i/380/depositphotos_649292270-stock-photo-php-interpreted-programming-language-hypertext.jpg',
            'description' => 'Test your knowledge in PHP.',
            'author_id' => 1,
        ]);

        Quiz::create([
            'name' => 'PHP Quiz2',
            'main_photo' => 'https://st2.depositphotos.com/4021139/7394/i/380/depositphotos_73943277-stock-photo-php-concept.jpg',
            'description' => 'Test your knowledge in PHP.',
            'author_id' => 1,
        ]);

        Quiz::create([
            'name' => 'PHP Quiz3',
            'main_photo' => 'https://st4.depositphotos.com/9233766/25455/i/380/depositphotos_254551978-stock-photo-php-web-development-and-coding.jpg',
            'description' => 'Test your knowledge in PHP.',
            'author_id' => 1,
        ]);
    }
}

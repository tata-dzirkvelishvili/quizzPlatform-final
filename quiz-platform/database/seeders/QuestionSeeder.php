<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run() {
        DB::table('questions')->truncate();

        DB::table('questions')->insert([
            'question' => 'What does PHP stand for?',
            'photo' => null,
            'option1' => 'Personal Home Page',
            'option2' => 'Preprocessed Hypertext Processor',
            'option3' => 'Private Hyperlink Protocol',
            'option4' => 'Public Hosting Platform',
            'correct_option' => 'option1',
            'position' => 1,
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'question' => 'Which of the following is not a valid way to start a PHP script?',
            'photo' => null,
            'option1' => '<?php',
            'option2' => '<?',
            'option3' => '<?=',
            'option4' => '<?!',
            'correct_option' => 'option4',
            'position' => 2,
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'question' => 'Which function in PHP is used to redirect the user to a different web page?',
            'photo' => null,
            'option1' => 'redirect()',
            'option2' => 'location()',
            'option3' => 'header()',
            'option4' => 'jump()',
            'correct_option' => 'option3',
            'position' => 3,
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the correct way to comment a single line of code in PHP?',
            'photo' => null,
            'option1' => '// Comment goes here',
            'option2' => '<!-- Comment goes here -->',
            'option3' => `/* Comment goes here */`,
            'option4' => ' -- Comment goes here --',
            'correct_option' => 'option1',
            'position' => 1,
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'question' => 'Which of the following is not a valid variable name in PHP?',
            'photo' => null,
            'option1' => '$myVariable',
            'option2' => '$my_variable',
            'option3' => '$9lives',
            'option4' => ' $_myVariable',
            'correct_option' => 'option3',
            'position' => 2,
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'question' => 'What function is used to check if a file exists in PHP?',
            'photo' => null,
            'option1' => 'file_exist()',
            'option2' => 'file_exists()',
            'option3' => 'filecheck()',
            'option4' => 'check_file()',
            'correct_option' => 'option2',
            'position' => 3,
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'question' => 'Which PHP function is used to open a connection to a MySQL database?',
            'photo' => null,
            'option1' => 'mysql_connect()',
            'option2' => 'db_connect()',
            'option3' => 'mysqli_connect()',
            'option4' => 'connect_to_db()',
            'correct_option' => 'option3',
            'position' => 1,
            'quiz_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'question' => 'What is the correct way to end a PHP statement?',
            'photo' => null,
            'option1' => ';',
            'option2' => ':',
            'option3' => '.',
            'option4' => ',',
            'correct_option' => 'option1',
            'position' => 2,
            'quiz_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

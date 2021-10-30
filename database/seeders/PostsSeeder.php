<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat sample data dari table posts
        $data = [
            [
                'title' => 'ACDC Lightning',
                'content' => 'Lightning World'
            ],
            [
                'title' => 'Reading A book',
                'content' => 'Improve Your Brain'
            ],
            [
                'title' => 'Course English',
                'content' => 'Listening and Speaking'
            ]
        ];
        DB::table('posts')->insert($data);
    }
}

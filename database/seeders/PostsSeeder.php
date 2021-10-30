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
                'Judul' => 'ACDC Lightning',
                'Konten' => 'Lightning World'
            ],
            [
                'Judul' => 'Reading A book',
                'Konten' => 'Improve Your Brain'
            ],
            [
                'Judul' => 'Course English',
                'Konten' => 'Listening and Speaking'
            ]
        ];
        DB::table('posts')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            [
                'real_name' => 'Clark',
                'hero_name' => 'Superman',
                'element' => 'Ice',
                'gender' => 'Male',
                'power' => '100'],
            [
                'real_name' => 'Bruce Wayne',
                'hero_name' => 'Batman',
                'element' => 'Dark',
                'gender' => 'Male',
                'power' => '80'],
            [
                'real_name' => 'Selina Kyle',
                'hero_name' => 'Cat Woman',
                'element' => 'Physics',
                'gender' => 'Female',
                'power' => '50'],
            [
                'real_name' => 'Groot',
                'hero_name' => 'Groot',
                'element' => 'Nature',
                'gender' => 'Specified',
                'power' => '15'],
            [
                'real_name' => 'Victor',
                'hero_name' => 'Cybord',
                'element' => 'Ice',
                'gender' => 'Male',
                'power' => '75']
        ]);
    }
}

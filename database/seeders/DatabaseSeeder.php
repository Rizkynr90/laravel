<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // pengiriman data ke dalam table di DB
        $this->call([
                    PostsSeeder::class,
                    BarangSeeder::class,
                    PesananSeeder::class,
                    PembelianSeeder::class,
                    PembeliSeeder::class,
                    SuplierSeeder::class
        ]);
    }
}

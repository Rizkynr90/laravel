<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Aziz',
                'alamat' => 'Cijerah',
                'kode_pos' => '302220',
                'kota' => 'Bandung'
            ],
            [
                'nama' => 'Alam',
                'alamat' => 'Citamiang',
                'kode_pos' => '249549',
                'kota' => 'Bandung'
            ],
            [
                'nama' => 'Rico',
                'alamat' => 'Cilebak',
                'kode_pos' => '250839',
                'kota' => 'Bandung'
            ],
            [
                'nama' => 'Sultan',
                'alamat' => 'Cisarang',
                'kode_pos' => '262920',
                'kota' => 'Bandung'
            ],
            [
                'nama' => 'Ruslan',
                'alamat' => 'Cijerah',
                'kode_pos' => '312620',
                'kota' => 'Bandung'
            ]
        ];
        DB::table('suplier')->insert($data);
    }
}

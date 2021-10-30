<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
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
                'nama' => 'Softcase',
                'varian' => 'Sedang',
                'harga_beli' => '50000',
                'harga_jual' => '55000'
            ],
            [
                'nama' => 'Casing',
                'varian' => 'Normal',
                'harga_beli' => '70000',
                'harga_jual' => '75000'
            ],
            [
                'nama' => 'Hardcase',
                'varian' => 'Besar',
                'harga_beli' => '40000',
                'harga_jual' => '45000'
            ],
            [
                'nama' => 'Mp3',
                'varian' => 'Sedang',
                'harga_beli' => '360000',
                'harga_jual' => '380000'
            ],
            [
                'nama' => 'Kaos Distro',
                'varian' => 'Lengan Panjang',
                'harga_beli' => '120000',
                'harga_jual' => '150000'
            ],
        ];
        DB::table('barang')->insert($data);
    }
}

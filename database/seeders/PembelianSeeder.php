<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
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
                'nama_barang' => 'Kaos Distro',
                'nama_suplier' => 'Aziz',
                'qty' => '153',
                'tgl' => '2021-06-03'
            ],
            [
                'nama_barang' => 'Hardcase',
                'nama_suplier' => 'Alam',
                'qty' => '60',
                'tgl' => '2021-03-12'
            ],
            [
                'nama_barang' => 'Casing',
                'nama_suplier' => 'Rico',
                'qty' => '46',
                'tgl' => '2021-01-20'
            ],
            [
                'nama_barang' => 'Softcase',
                'nama_suplier' => 'Sultan',
                'qty' => '55',
                'tgl' => '2021-02-27'
            ],
            [
                'nama_barang' => 'Mp3',
                'nama_suplier' => 'Ruslan',
                'qty' => '20',
                'tgl' => '2021-08-12'
            ]
        ];
        DB::table('pembelian')->insert($data);
    }
}

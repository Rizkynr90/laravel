<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
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
                'nama_pelanggan' => 'Azhar',
                'nama_barang' => 'Softcase',
                'qty' => '2',
                'tgl_pesan' => '2021-08-12'
            ],
            [
                'nama_pelanggan' => 'Afif',
                'nama_barang' => 'Mp3',
                'qty' => '1',
                'tgl_pesan' => '2021-09-15'
            ],
            [
                'nama_pelanggan' => 'Azis',
                'nama_barang' => 'Hardcase',
                'qty' => '5',
                'tgl_pesan' => '2021-10-15'
            ],
            [
                'nama_pelanggan' => 'Zulfan',
                'nama_barang' => 'Casing',
                'qty' => '7',
                'tgl_pesan' => '2021-11-20'
            ],
            [
                'nama_pelanggan' => 'Rico',
                'nama_barang' => 'Kaos Distro',
                'qty' => '10',
                'tgl_pesan' => '2021-12-24'
            ]
        ];
        DB::table('pesanan')->insert($data);
    }
}

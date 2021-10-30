<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
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
                'nama' => 'Ujang',
                'jns_kelamin' => 'Pria',
                'alamat' => 'Jl Cisirung',
                'kode_pos' => '240223',
                'kota' => 'Bandung',
                'tgl_lahir' => '1995-03-04'
            ],
            [
                'nama' => 'Jajang',
                'jns_kelamin' => 'Pria',
                'alamat' => 'Jl Ciwidey',
                'kode_pos' => '220023',
                'kota' => 'Bandung',
                'tgl_lahir' => '1999-07-01'
            ],
            [
                'nama' => 'Ayu',
                'jns_kelamin' => 'Wwanita',
                'alamat' => 'Jl Batubara',
                'kode_pos' => '250023',
                'kota' => 'Bandung',
                'tgl_lahir' => '1994-09-12'
            ],
            [
                'nama' => 'Linda',
                'jns_kelamin' => 'Wanita',
                'alamat' => 'Jl Perempatan',
                'kode_pos' => '270923',
                'kota' => 'Bandung',
                'tgl_lahir' => '2000-05-24'
            ],
            [
                'nama' => 'Sarah',
                'jns_kelamin' => 'Wanita',
                'alamat' => 'Jl Buah Batu',
                'kode_pos' => '291125',
                'kota' => 'Bandung',
                'tgl_lahir' => '2001-12-30'
            ]
        ];
        DB::table('pembeli')->insert($data);
    }
}

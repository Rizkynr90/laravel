<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Pembelian;
use App\Models\Pesanan;
use App\Models\Suplier;
use App\Models\Hero;



class MyController extends Controller
{
    public function index()
    {
        $data = [
            ['nama' => 'Dadang', 'kelas' => '12 RPL 3'],
            ['nama' => 'Mamat', 'kelas' => '12 RPL 2'],
            ['nama' => 'Asep', 'kelas' => '12 RPL 1']
        ];
        return view('latihan', compact('data'));
    }
    public function posting()
    {
        $posts = Post::all();
        return view('post', compact('posts'));
    }
    public function barang()
    {
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }
    public function pembeli()
    {
        $pembeli = Pembeli::all();
        return view('pembeli', compact('pembeli'));
    }
    public function pembelian()
    {
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }
    public function single($id)
    {
        $data = Pembelian::findOrFail($id);
        return view('single', compact('data'));
    }
    public function pesanan()
    {
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }
    public function suplier()
    {
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }
    public function hero()
    {
        $hero = Hero::all();
        return view('heroes', compact('hero'));
    }
    public function singlehero($id)
    {
        $single = Hero::findOrFail($id);
        return view('singlehero', compact('single'));
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

// route basic
// Route::get('tentang', function() {
//     return "<h1>Hello</h1>"
//         . "Selamat datang di website saya<br>"
//         . "Laravel emang keren";
// });

// Route::get('saya', function() {
//     // mengembalikan string
//     $nama = "<b>Rizky Nurahman</b>";
//     return "Nama saya adalah ".$nama;
// });

// Route::get('saya', function() {
//     // mengembalikan string
//     // di folder resources/views
//     $nama = "<b>Rizky Nurahman</b>";
//     return view('profile', compact('nama'));
// });

Route::get('afif', function() {
    $nama =  "Rizky Muhammad Say Afif";
    $jk = "Pria";
    $alamat = "Bandung";
    $sekolah = "SMK ASSALAAM BANDUNG";
    return view('afif', compact('nama', 'jk', 'alamat', 'sekolah'));
});

Route::get('aziz', function() {
    $nama =  "Aziz Tubagus Taufik Hirzi";
    $jk = "Pria";
    $alamat = "Bandung";
    $sekolah = "SMK ASSALAAM BANDUNG";
    return view('aziz', compact('nama', 'jk', 'alamat', 'sekolah'));
});

Route::get('sultan', function() {
    $nama =  "Sultan Darryl Dzulfikar";
    $jk = "Pria";
    $alamat = "Bandung";
    $sekolah = "SMK ASSALAAM BANDUNG";
    return view('sultan', compact('nama', 'jk', 'alamat', 'sekolah'));
});

Route::get('rico', function() {
    $nama =  "Rico Achmad Pebiawan";
    $jk = "Pria";
    $alamat = "Bandung";
    $sekolah = "SMK ASSALAAM BANDUNG";
    return view('rico', compact('nama', 'jk', 'alamat', 'sekolah'));
});
Route::get('ruslan', function() {
    $nama =  "Ruslan Ramdani";
    $jk = "Pria";
    $alamat = "Bandung";
    $sekolah = "SMK ASSALAAM BANDUNG";
    return view('ruslan', compact('nama', 'jk', 'alamat', 'sekolah'));
});

// route parameter
Route::get('posting/{id}', function ($id) {
    return "Halaman Posting : ".$id;
});

Route::get('post/{id?}', function ($id = 1) {
    return "Halaman Posting : ".$id;
});

Route::get('user/{nama?}/{alamat?}/{jk?}/{tb?}/{bb?}', function ($nama = null, $alamat = null, $jk = null, $tb = null, $bb = null) {
    return view('biodata', compact('nama', 'alamat', 'jk', 'tb', 'bb'));
});

// mengakses data melalui model
Route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

// mencari data berdasarkan parameter 'id'
Route::get('testmodel/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    return $query;
});

// mencari data berdasarkan field 'title' yang sama dengan parameter 's'
Route::get('testmodel-cari/{search}', function ($s) {
    $query = App\Models\Post::where('title', 'like', "%$s%")->get();
    return $query;
});

// mengubah judul dari data ke 2 berdasarkan 'id'
Route::get('testmodel-update', function () {
    $query = App\Models\Post::find(2);
    $query->title = "Bane Si Bajak Laut";
    $query->save();
    return $query;
});

// menambah data baru
Route::get('testmodel-add', function () {
    $query = new App\Models\Post();
    $query->title = "Sholawat menghapus maksiat";
    $query->content = "Lorem ipsum dolor sit amet";
    $query->save();
    return $query;
});

Route::get('testmodel-delete/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    $query->delete();
    return redirect('/testmodel');
});

Route::get('barang', function () {
    $query = App\Models\Barang::all();
    return $query;
});

Route::get('pesanan', function () {
    $query = App\Models\Pesanan::all();
    return $query;
});

Route::get('pembelian', function () {
    $query = App\Models\Pembelian::all();
    return $query;
});

Route::get('pembeli', function () {
    $query = App\Models\Pembeli::all();
    return $query;
});

Route::get('suplier', function () {
    $query = App\Models\Suplier::all();
    return $query;
});
Route::resource('latihan', MyController::class);

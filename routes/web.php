<?php

use Illuminate\Support\Facades\Route;

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
}

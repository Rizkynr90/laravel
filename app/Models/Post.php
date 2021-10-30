<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//  memberi perintah model akan digunakan oleh table tersebut
    // protected $table = 'post';

    // protected $fillable = [
    //         'Judul',
    //         'Konten'
    //     ];
}

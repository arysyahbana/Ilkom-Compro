<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostinganBerita extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'link',
        'nama_penulis',
        'judul',
        'isi_halaman',
    ];

    public static $rules = [
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'link' => 'nullable|string',
        'nama_penulis' => 'required|string|max:255',
        'judul' => 'required|string|max:255',
        'isi_halaman' => 'required|string',
    ];
}

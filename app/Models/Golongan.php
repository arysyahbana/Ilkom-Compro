<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'golongan',
    ];

    public static $rules = [
        'golongan' => 'required|string|max:255',
    ];
}

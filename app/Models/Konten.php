<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $table = 'konten';

    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'id_kategori',
        'is_active',
        'is_main',
        'path_gambar',
        'created_by',
        'updated_by',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

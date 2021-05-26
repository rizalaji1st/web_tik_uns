<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKategoriKonten extends Model
{
    use HasFactory;
    protected $table = 'ref_kategori_konten';

    protected $fillable = [
        'nama',
        'created_by',
        'updated_by',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

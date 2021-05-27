<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RefKategoriKonten;
use App\Models\User;

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

    public function refKategori(){
        return $this->hasOne(RefKategoriKonten::class,'id','id_kategori');
    }

    public function createdBy(){
        return $this->hasOne(User::class,'id','created_by');
    }
}

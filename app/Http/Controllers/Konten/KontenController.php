<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index(){
        return view('pages.konten.index');
    }

    public function tentang(){
        return view('pages.konten.tentang');
    }

    public function berita(){
        return view('pages.konten.underConstruction');
    }
    
    public function layanan(){
        return view('pages.konten.underConstruction');
    }
}

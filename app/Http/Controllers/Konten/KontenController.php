<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index(){
        return view('pages.konten.index');
    }
}

<?php

namespace App\Http\Controllers\Konten\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\User;
use App\Models\RefKategoriKonten;

class BlogController extends Controller
{
    public function index(){
        $kontens = Konten::orderBy('id','desc')->get(); 
        $kategoris = RefKategoriKonten::all();
        $latest_kontens = Konten::orderBy('id','desc')->take(5)->get();
        return view('pages.konten.blog.index', compact('kontens','kategoris','latest_kontens'));
    }

    public function kategori($nama){
        $thisKategori = RefKategoriKonten::where('nama',$nama)->first();
        $kategoris = RefKategoriKonten::all();
        $latest_kontens = Konten::orderBy('id','desc')->take(5)->get();
        $kontens = Konten::where('id_kategori',$thisKategori->id)->orderBy('id','desc')->get(); 
        return view('pages.konten.blog.kategori', compact('kontens','kategoris','latest_kontens','thisKategori'));
    }

    public function blog($slug){
        $konten = Konten::where('slug',$slug)->first();
        $latest_kontens = Konten::orderBy('id','desc')->take(5)->get();
        $kategoris = RefKategoriKonten::all();
        if (!$konten) {
            return view('pages.konten.404NotFound');
        }
        $user = User::where('id',$konten->created_by)->first();
        return view('pages.konten.blog.single-blog',compact('konten', 'user', 'kategoris','latest_kontens'));
    }
}

<?php

namespace App\Http\Controllers\Admin\ManajemenKategori;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\RefKategoriKonten;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ManajemenKategoriController extends Controller
{
    public function index(){
        $kategoris = RefKategoriKonten::all();

        return view('pages.admin.manajemen_kategori.index', compact('kategoris'));
    }

    public function create(){
        return view('pages.admin.manajemen_kategori.create');
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        $user = Auth::id();
        $kategori = RefKategoriKonten::create([
            'nama' => $data['nama'],
            'created_at' => Carbon::now(),
            'created_by' => $user,
        ]);
        return redirect('/admin/manajemen-kategori')->with('success','Kategori berhasil ditambahkan');
    }

    public function update(RefKategoriKonten $kategori){
        return view('pages.admin.manajemen_kategori.update', compact('kategori'));
    }

    public function updateStore(Request $request, RefKategoriKonten $kategori){
        $data = $request->except(['_token']);
        $kategori->nama = $data['nama'];
        $kategori->save();

        return redirect('/admin/manajemen-kategori')->with('success','Kategori berhasil diupdate');
    }

    public function delete(RefKategoriKonten $kategori){
        $kategori->delete();
        return redirect('/admin/manajemen-kategori')->with('success','Kategori berhasil dihapus');
    }
}

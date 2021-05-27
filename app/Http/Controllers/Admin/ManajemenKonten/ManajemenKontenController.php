<?php

namespace App\Http\Controllers\Admin\ManajemenKonten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Konten;
use App\Models\RefKategoriKonten;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ManajemenKontenController extends Controller
{
    public function index(){
        $kontens = Konten::all();
        
        return view('pages.admin.manajemen_konten.index', compact('kontens'));
    }

    public function create(){
        $kategoris = RefKategoriKonten::all();

        return view('pages.admin.manajemen_konten.create', compact('kategoris'));
    }

    public function store(Request $request){
        $data = $request->except(['_token']);
        $user = Auth::id();
        $slug = Str::of($data['judul'])->slug('-');
        $konten = Konten::where('slug',$slug)->count();
        $slug = $konten ? $slug .'-' .Carbon::now()->format('m-d-y') : $slug;
        $file = $request->file('file');
        $ekstensi = $request->file('file')->getClientOriginalExtension();
        $nama_file = $slug . '-' .Carbon::now()->timestamp .'.'. $ekstensi;
        $path_file = Storage::putFileAs('public/data_file/post_gambar', $file, $nama_file);
        $Konten = Konten::create([
            'judul' => $data['judul'],
            'slug' => $slug,
            'konten' => $data['konten'],
            'id_kategori' => (int) $data['kategori'],
            'is_active' => (int)$data['isActive'] ? true : false,
            'is_main' => (int)$data['isMain'] ? true : false,
            'path_gambar' => $path_file,
            'created_at' => Carbon::now(),
            'created_by' => $user
        ]);


        return redirect('/admin/manajemen-konten')->with('success','Konten berhasil ditambahkan');
    }

    public function update(User $user){
        $roles = Role::all();

        return view('pages.admin.manajemen_konten.update', compact('roles','user'));
    }

    public function updateStore(Request $request, User $user){
        $data = $request->except(['_token']);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        if(isset($data['roles']))
            $user->roles()->sync($data['roles']);

        return redirect('/admin/manajemen-akun')->with('success','Akun berhasil diupdate');
    }

    public function delete(User $user){
        $user->delete();

        return redirect('/admin/manajemen-akun')->with('success','Akun berhasil dihapus');
    }
}

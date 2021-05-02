<?php

namespace App\Http\Controllers\Konten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function uptTik() {
        return view('pages.konten.underConstruction');
    }

    public function visiMisi() {
        return view('pages.konten.profil.visi_misi');
    }

    public function strukturOrganisasi() {
        return view('pages.konten.underConstruction');
    }
}

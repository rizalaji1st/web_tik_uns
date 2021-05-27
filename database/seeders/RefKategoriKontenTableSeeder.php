<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RefKategoriKonten;

class RefKategoriKontenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RefKategoriKonten::truncate();

        RefKategoriKonten::create(['nama' => 'layanan']);
        RefKategoriKonten::create(['nama' => 'berita']);
    }
}

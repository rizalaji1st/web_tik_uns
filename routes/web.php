<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Konten\KontenController;
use App\Http\Controllers\Konten\ProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Admin')
        ->prefix('admin')
        ->name('admin.')
        ->group(function (){
            Route::get('/', [AdminController::class, 'index']);
        });

Route::namespace('Konten')
        ->name('konten.')
        ->group(function (){
            Route::get('/', [KontenController::class, 'index'])->name('index');
            Route::get('/upt-tik-uns', [ProfilController::class, 'uptTik'])->name('uptTik');
            Route::get('/visi-misi-dan-tujuan', [ProfilController::class, 'visiMisi'])->name('visiMisi');
            Route::get('/struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('strukturOrganisasi');
            Route::get('/tentang', [KontenController::class, 'tentang'])->name('tentang');
            Route::get('/berita', [KontenController::class, 'berita'])->name('berita');
            Route::get('/layanan', [KontenController::class, 'layanan'])->name('layanan');
        });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

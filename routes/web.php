<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Konten\KontenController;
use App\Http\Controllers\Konten\ProfilController;
use App\Http\Controllers\Admin\ManajemenAkun\ManajemenAkunController;
use App\Http\Controllers\Admin\ManajemenKonten\ManajemenKontenController;
use App\Http\Controllers\Admin\ManajemenKategori\ManajemenKategoriController;
use App\Http\Controllers\Konten\Blog\BlogController;

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
        ->middleware('can:admin-writer')
        ->group(function (){
            Route::get('/', [AdminController::class, 'index']);
            Route::namespace('ManajemenAkun')
                ->prefix('manajemen-akun')
                ->name('manajemen-akun.')
                ->group(function(){
                    Route::get('/', [ManajemenAkunController::class, 'index']);
                    Route::get('/create', [ManajemenAkunController::class, 'create']);
                    Route::post('/create/store', [ManajemenAkunController::class, 'store']);
                    Route::get('/update/{user}', [ManajemenAkunController::class, 'update']);
                    Route::post('/update/{user}/store', [ManajemenAkunController::class, 'updateStore']);
                    Route::post('/delete/{user}', [ManajemenAkunController::class, 'delete']);
                });
            Route::namespace('ManajemenKategori')
                ->prefix('manajemen-kategori')
                ->name('manajemen-kategori.')
                ->group(function(){
                    Route::get('/', [ManajemenKategoriController::class, 'index']);
                    Route::get('/create', [ManajemenKategoriController::class, 'create']);
                    Route::post('/create/store', [ManajemenKategoriController::class, 'store']);
                    Route::get('/update/{kategori}', [ManajemenKategoriController::class, 'update']);
                    Route::post('/update/{kategori}/store', [ManajemenKategoriController::class, 'updateStore']);
                    Route::post('/delete/{kategori}', [ManajemenKategoriController::class, 'delete']);
                });
            Route::namespace('ManajemenKonten')
                ->prefix('manajemen-konten')
                ->name('manajemen-konten.')
                ->group(function(){
                    Route::get('/', [ManajemenKontenController::class, 'index']);
                    Route::get('/create', [ManajemenKontenController::class, 'create']);
                    Route::post('/create/store', [ManajemenKontenController::class, 'store']);
                    Route::get('/update/{konten}', [ManajemenKontenController::class, 'update']);
                    Route::post('/update/{konten}/store', [ManajemenKontenController::class, 'updateStore']);
                    Route::post('/delete/{konten}', [ManajemenKontenController::class, 'delete']);
                });
        });

Route::namespace('Konten')
        ->name('konten.')
        ->group(function (){
            Route::get('/', [KontenController::class, 'index'])->name('index');
            Route::get('/konten/{slug}', [KontenController::class, 'konten'])->name('konten');
            Route::get('/post', [KontenController::class, 'post'])->name('post');
            Route::get('/upt-tik-uns', [ProfilController::class, 'uptTik'])->name('uptTik');
            Route::get('/visi-misi-dan-tujuan', [ProfilController::class, 'visiMisi'])->name('visiMisi');
            Route::get('/struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('strukturOrganisasi');
            Route::get('/tentang', [KontenController::class, 'tentang'])->name('tentang');
            Route::get('/berita', [KontenController::class, 'berita'])->name('berita');
            Route::get('/layanan', [KontenController::class, 'layanan'])->name('layanan');
            Route::namespace('Blog')
                ->name('blog.')
                ->prefix('blog')
                ->group(function (){
                    Route::get('/', [BlogController::class, 'index'])->name('index');
                    Route::get('/{kategori}', [BlogController::class, 'kategori'])->name('kategori');
                    Route::get('/detail/{slug}', [BlogController::class, 'blog'])->name('blog');
                });
        });

Auth::routes(['register' => false,'reset' => false]);


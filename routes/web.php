<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Konten\KontenController;

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
            Route::get('/', [KontenController::class, 'index']);
        });
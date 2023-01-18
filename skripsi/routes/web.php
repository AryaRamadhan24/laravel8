<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing/welcome');
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'indexHome'])->name('indexHome');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sapi', [App\Http\Controllers\SapiController::class, 'index'])->name('sapi');

Route::get('/penyakit', [App\Http\Controllers\PenyakitController::class, 'index'])->name('penyakit');

Route::get('/gejala', [App\Http\Controllers\GejalaController::class, 'index'])->name('gejala');
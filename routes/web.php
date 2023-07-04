<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('pages.pelaporan pres.index');
});
Route::get('/page2', function () {
    return view('pages.pelaporan pres.page2');
});
Route::get('/page22', function () {
    return view('pages.pelaporan pres.page22');
});
Route::get('/page3', function () {
    return view('pages.pelaporan pres.page3');
});
Route::get('/page4', function () {
    return view('pages.pelaporan pres.page4');
});
Route::get('/page44', function () {
    return view('pages.pelaporan pres.page44');
});
Route::get('/page5', function () {
    return view('pages.pelaporan pres.page5');
});
Route::get('/page6', function () {
    return view('pages.pelaporan pres.page6');
});



Route::get('/kedua', function () {
    return view('pages.status pelaporan.index');
});



Route::get('/ketiga', function () {
    return view('pages.prestasi mahasiswa.index');
});
Route::get('/lanjut', function () {
    return view('pages.status pelaporan.index');
});









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('laporan', [PelaporanController::class, 'index'])->name('laporan.index');


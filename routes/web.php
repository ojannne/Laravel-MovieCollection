<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;




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

Route::get('/salam', function () {
    return "Assalamu'alaikum, Selamat Belajar Laravel PeTIK Jombang Angkatan III";
});

//routing parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});


//routing view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

//routing Data Santri
Route::get('/santri', [SantriController::class, 'dataSantri']
);

//routing view hello
Route::get('/hello', function () {
    return view('hello', ['name' => 'Inaya']);
});

//routing view nilai
Route::get('/nilai', function () {
    return view('nilai');
});

//routing view daftar_nilai
Route::get('/daftarNilai', function () {
    return view('daftar_nilai');
});

//routing view layouts
Route::get('/framework', function () {
    return view('layouts.index');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route film
use App\Http\Controllers\FilmController;
Route::get('/film',[FilmController::class, 'index'])->name('film.index');
Route::get('/film/create',[FilmController::class, 'create'])->name('film.create');
Route::post('/film',[FilmController::class, 'store'])->name('film.store');
// Route film
Route::resource('film', FilmController::class);

Route::get('filmpdf',[FilmController::class,'filmPDF']);


// Route Tiket
use App\Http\Controllers\TiketController;
Route::get('/tiket',[TiketController::class, 'index'])->name('tiket.index');
Route::get('/tiket/create',[TiketController::class, 'create'])->name('tiket.create');
Route::post('/tiket',[TiketController::class, 'store'])->name('tiket.store');
// Route Tiket
Route::resource('tiket', TiketController::class);

Route::get('tiketpdf',[TiketController::class,'tiketPDF']);

// Route Location
use App\Http\Controllers\LokasiController;
Route::get('/lokasi',[LokasiController::class, 'index'])->name('lokasi.index');
Route::get('/lokasi/create',[lokasiController::class, 'create'])->name('lokasi.create');
Route::post('/lokasi',[LokasiController::class, 'store'])->name('lokasi.store');
// Route lokasi
Route::resource('lokasi', LokasiController::class);

Route::get('lokasipdf',[LokasiController::class,'lokasiPDF']);



use App\Http\Controllers\CatatanMedisController;
Route::get('catatanmedis/',[CatatanMedisController::class, 'index'])->name('catatanmedis.index');
Route::get('/catatanmedis/create',[CatatanMedisController::class, 'create'])->name('catatanmedis.create');
Route::post('/catatanmedis',[CatatanMedisController::class, 'store'])->name('catatanmedis.store');


Route::resource('catatanmedis', CatatanMedisController::class);
Route::get('catatanmedispdf',[CatatanMedisController::class,'catatanmedisPDF']);

use App\Http\Controllers\KasController;
Route::get('kas/',[KasController::class, 'index'])->name('kas.index');



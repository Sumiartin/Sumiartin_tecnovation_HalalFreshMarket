<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\KelolaController;
use App\Http\Controllers\MasukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayurController;
use App\Http\Controllers\BuahController;
use App\Http\Controllers\IkanController;

// Routes for FoodController
Route::get('/detail_buah', [FoodController::class, 'index'])->name('detail_buah');
Route::get('/detail_sayuran', [FoodController::class, 'detailSayuran'])->name('detail_sayuran');
Route::get('/detail_ikan', [FoodController::class, 'detailIkan'])->name('detail_ikan');

// Route for admin dashboard (KelolaController)
Route::get('/dashboard', [KelolaController::class, 'index'])->name('dashboard');

// Routes for KelolaController
Route::get('/menu_sayur', [KelolaController::class, 'menuSayur'])->name('menu_sayur');
Route::get('/menu_buah', [KelolaController::class, 'menuBuah'])->name('menu_buah');
Route::get('/menu_ikan', [KelolaController::class, 'menuIkan'])->name('menu_ikan');
Route::get('tambah_buah', [KelolaController::class, 'tambahBuah'])->name('tambah_buah');
Route::get('tambah_ikan', [KelolaController::class, 'tambahIkan'])->name('tambah_ikan');
Route::get('tambah_sayur', [KelolaController::class, 'tambahSayur'])->name('tambah_sayur');

// Routes for MasukController
Route::get('masuk', [MasukController::class, 'Masuk'])->name('masuk');
Route::post('postMasuk', [MasukController::class, 'postMasuk'])->name('postMasuk');

// Route for welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route to ensure user is logged in before accessing dashboard
Route::middleware(['checkLogin'])->group(function () {
    Route::get('/dashboard', [KelolaController::class, 'index'])->name('dashboard');
});

// Route to save sayur data
Route::post('/simpan_sayur', 'SayurController@simpan')->name('simpan_sayur');
Route::post('/simpan_sayur', [KelolaController::class, 'simpanSayur'])->name('simpan_sayur');

Route::get('/menu_sayur', [SayurController::class, 'index'])->name('menu_sayur');
// Route to display menu sayur
Route::get('/menu_sayur', [SayurController::class, 'editDaftarSayur'])->name('menu_sayur');

Route::delete('/hapus_sayur/{id}', [KelolaController::class, 'hapusSayur'])->name('hapus_sayur');


// Route to save buah data
Route::post('/simpan_buah', 'BuahController@simpan')->name('simpan_buah');
Route::post('/simpan_buah', [KelolaController::class, 'simpanBuah'])->name('simpan_buah');

Route::get('/menu_buah', [BuahController::class, 'index'])->name('menu_buah');
// Route to display menu sayur
Route::get('/menu_buah', [BuahController::class, 'editDaftarBuah'])->name('menu_buah');

Route::delete('/hapus_buah/{id}', [KelolaController::class, 'hapusBuah'])->name('hapus_buah');


// Route to save buah data
Route::post('/simpan_ikan', 'IkanController@simpan')->name('simpan_ikan');
Route::post('/simpan_ikan', [KelolaController::class, 'simpanIkan'])->name('simpan_ikan');

Route::get('/menu_ikan', [IkanController::class, 'index'])->name('menu_ikan');
// Route to display menu sayur
Route::get('/menu_ikan', [IkanController::class, 'editDaftarIkan'])->name('menu_ikan');

Route::delete('/hapus_ikan/{id}', [KelolaController::class, 'hapusIkan'])->name('hapus_ikan');
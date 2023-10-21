<?php

use App\Http\Controllers\adminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\detailLaporanController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

// Route::get('/', function () {
    //     return view('welcome');
    // });

Route::get('/', [pengaduanController::class, "index"]);

Route::get('/login', [loginController::class, "login"])->name('login');
// Route::get('/login', [loginController::class, "login"]);
Route::post('/login', [loginController::class, "proses_login"]);

// Route::get('/register', [registerController::class, "register"]);
// Route::post('/register', [registerController::class, "proses_tambah_masyarakat"]);
// Route::post('/register', [registerController::class, "proses_tambah_petugas"]);
// Route::get('/adminPage', [adminPageController::class, "allData"]);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/laporan', [laporanController::class, "laporan"]);

    Route::post('/laporan', [laporanController::class, "proses_tambah_pengaduan"]);
    
    Route::get('/detailLaporan', [detailLaporanController::class, "tampilData"]);

    // Route::get('/detailLaporan', [detailLaporanController::class. "hapus"]);
    Route::get('/detailLaporan/hapus/{id_pengaduan}', [detailLaporanController::class, "hapus"]);

    // Route::detail('/detailLaporan/detail/{id_pengaduan}', [detailLaporanController::class, "detail"]);
    Route::get('/detailLaporan/detail/{id_pengaduan}', [detailLaporanController::class, "detail"]);

    Route::post('/detailLaporan/update/{id_pengaduan}', [detailLaporanController::class, "update"]);
    Route::get('/detailLaporan/update/{id_pengaduan}', [detailLaporanController::class, "tampil_update"]);    
});

Route::get('/profil', function () {
    return view('profil', [
        "title" => "Profil"
    ]);
});

Route::get('/verifikasi', function () {
    return view('verifikasi', [
        "title" => "Verifikasi"
    ]);
});

Route::get('/tanggapan', function () {
    return view('tanggapan', [
        "title" => "Tanggapan"
    ]);
});
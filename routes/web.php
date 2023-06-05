<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KapalLautController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\MaskapaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PemesananKapalLautController;
use App\Http\Controllers\PemesananKeretaApiController;
use App\Http\Controllers\PemesananPesawatController;
use App\Http\Controllers\TiketKapalController;
use App\Http\Controllers\TiketKeretaApiController;
use App\Http\Controllers\TiketPesawatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenggunaController;

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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'addView'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);

Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
// Route::get('/pengguna/create', [PenggunaController::class, 'addView'])->name('pengguna.create');
// Route::post('/pengguna', [PenggunaController::class, 'store']);
// Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit'])->name('pengguna.edit');
// Route::put('/pengguna/update/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
// Route::get('/pengguna/delete/{id}', [PenggunaController::class, 'destroy']);

Route::get('/kereta', [KeretaController::class, 'index'])->name('kereta.index');
Route::get('/kereta/create', [KeretaController::class, 'addView'])->name('kereta.create');
Route::post('/kereta', [KeretaController::class, 'store']);
Route::get('/kereta/edit/{id}', [KeretaController::class, 'edit'])->name('kereta.edit');
Route::put('/kereta/update/{id}', [KeretaController::class, 'update'])->name('kereta.update');
Route::get('/kereta/delete/{id}', [KeretaController::class, 'destroy']);

Route::get('/maskapai', [MaskapaiController::class, 'index'])->name('maskapai.index');
Route::get('/maskapai/create', [MaskapaiController::class, 'addView'])->name('maskapai.create');
Route::post('/maskapai', [MaskapaiController::class, 'store']);
Route::get('/maskapai/edit/{id}', [MaskapaiController::class, 'edit'])->name('maskapai.edit');
Route::put('/maskapai/update/{id}', [MaskapaiController::class, 'update'])->name('maskapai.update');
Route::get('/maskapai/delete/{id}', [MaskapaiController::class, 'destroy']);

Route::get('/kapallaut', [KapalLautController::class, 'index'])->name('kapallaut.index');
Route::get('/kapallaut/create', [KapalLautController::class, 'addView'])->name('kapallaut.create');
Route::post('/kapallaut', [KapalLautController::class, 'store']);
Route::get('/kapallaut/edit/{id}', [KapalLautController::class, 'edit'])->name('kapallaut.edit');
Route::put('/kapallaut/update/{id}', [KapalLautController::class, 'update'])->name('kapallaut.update');
Route::get('/kapallaut/delete/{id}', [KapalLautController::class, 'destroy']);

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/create', [JadwalController::class, 'addView'])->name('jadwal.create');
Route::post('/jadwal', [JadwalController::class, 'store']);
Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit'])->name('jadwal.edit');
Route::put('/jadwal/update/{id}', [JadwalController::class, 'update'])->name('jadwal.update');
Route::get('/jadwal/delete/{id}', [JadwalController::class, 'destroy']);

Route::get('/kota', [KotaController::class, 'index'])->name('kota.index');
Route::get('/kota/create', [KotaController::class, 'addView'])->name('kota.create');
Route::post('/kota', [KotaController::class, 'store']);
Route::get('/kota/edit/{id}', [KotaController::class, 'edit'])->name('kota.edit');
Route::put('/kota/update/{id}', [KotaController::class, 'update'])->name('kota.update');
Route::get('/kota/delete/{id}', [KotaController::class, 'destroy']);

Route::get('/tiketkeretaapi', [TiketKeretaApiController::class, 'index'])->name('tiketkeretaapi.index');
Route::get('/tiketkeretaapi/create', [TiketKeretaApiController::class, 'addView'])->name('tiketkeretaapi.create');
Route::post('/tiketkeretaapi', [TiketKeretaApiController::class, 'store']);
Route::get('/tiketkeretaapi/edit/{id}', [TiketKeretaApiController::class, 'edit'])->name('tiketkeretaapi.edit');
Route::put('/tiketkeretaapi/update/{id}', [TiketKeretaApiController::class, 'update'])->name('tiketkeretaapi.update');
Route::get('/tiketkeretaapi/delete/{id}', [TiketKeretaApiController::class, 'destroy']);

Route::get('/tiketpesawat', [TiketPesawatController::class, 'index'])->name('tiketpesawat.index');
Route::get('/tiketpesawat/create', [TiketPesawatController::class, 'addView'])->name('tiketpesawat.create');
Route::post('/tiketpesawat', [TiketPesawatController::class, 'store']);
Route::get('/tiketpesawat/edit/{id}', [TiketPesawatController::class, 'edit'])->name('tiketpesawat.edit');
Route::put('/tiketpesawat/update/{id}', [TiketPesawatController::class, 'update'])->name('tiketpesawat.update');
Route::get('/tiketpesawat/delete/{id}', [TiketPesawatController::class, 'destroy']);

Route::get('/tiketkapal', [TiketKapalController::class, 'index'])->name('tiketkapal.index');
Route::get('/tiketkapal/create', [TiketKapalController::class, 'addView'])->name('tiketkapal.create');
Route::post('/tiketkapal', [TiketKapalController::class, 'store']);
Route::get('/tiketkapal/edit/{id}', [TiketKapalController::class, 'edit'])->name('tiketkapal.edit');
Route::put('/tiketkapal/update/{id}', [TiketKapalController::class, 'update'])->name('tiketkapal.update');
Route::get('/tiketkapal/delete/{id}', [TiketKapalController::class, 'destroy']);

Route::get('/pemesanankeretaapi', [PemesananKeretaApiController::class, 'index'])->name('pemesanankeretaapi.index');
Route::get('/pemesanankeretaapi/create', [PemesananKeretaApiController::class, 'addView'])->name('pemesanankeretaapi.create');
Route::post('/pemesanankeretaapi', [PemesananKeretaApiController::class, 'store']);
Route::get('/pemesanankeretaapi/edit/{id}', [PemesananKeretaApiController::class, 'edit'])->name('pemesanankeretaapi.edit');
Route::put('/pemesanankeretaapi/update/{id}', [PemesananKeretaApiController::class, 'update'])->name('pemesanankeretaapi.update');
Route::get('/pemesanankeretaapi/delete/{id}', [PemesananKeretaApiController::class, 'destroy']);

Route::get('/pemesananpesawat', [PemesananPesawatController::class, 'index'])->name('pemesananpesawat.index');
Route::get('/pemesananpesawat/create', [PemesananPesawatController::class, 'addView'])->name('pemesananpesawat.create');
Route::post('/pemesananpesawat', [PemesananPesawatController::class, 'store']);
Route::get('/pemesananpesawat/edit/{id}', [PemesananPesawatController::class, 'edit'])->name('pemesananpesawat.edit');
Route::put('/pemesananpesawat/update/{id}', [PemesananPesawatController::class, 'update'])->name('pemesananpesawat.update');
Route::get('/pemesananpesawat/delete/{id}', [PemesananPesawatController::class, 'destroy']);

Route::get('/pemesanankapallaut', [PemesananKapalLautController::class, 'index'])->name('pemesanankapallaut.index');
Route::get('/pemesanankapallaut/create', [PemesananKapalLautController::class, 'addView'])->name('pemesanankapallaut.create');
Route::post('/pemesanankapallaut', [PemesananKapalLautController::class, 'store']);
Route::get('/pemesanankapallaut/edit/{id}', [PemesananKapalLautController::class, 'edit'])->name('pemesanankapallaut.edit');
Route::put('/pemesanankapallaut/update/{id}', [PemesananKapalLautController::class, 'update'])->name('pemesanankapallaut.update');
Route::get('/pemesanankapallaut/delete/{id}', [PemesananKapalLautController::class, 'destroy']);




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// ROUTE UNTUK DASHBOARD HALAMAN MASING MASING ROLE

Route::get('/admin', function () {
    return view('admin.home');
})->middleware(['auth', 'role:admin']);

Route::get('/gudang/home-page', function () {
    return view('gudang.home');
})->middleware(['auth', 'role:gudang']);

Route::get('/pengiriman/home-page', function () {
    return view('pengiriman.home');
})->middleware(['auth', 'role:pengiriman']);

//ROUTE UNTUK LOG-OUT

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

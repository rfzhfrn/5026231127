<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SepedaController;
use App\Http\Controllers\NilaiKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1>di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan5', function () {
	return view('pertemuan5');
});


Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'create']);
Route::post('/keranjang/simpan', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjang/hapus/{id}', [KeranjangBelanjaController::class, 'destroy']);
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'create']);
Route::post('/nilaikuliah/simpan', [NilaiKuliahController::class, 'store']);
Route::get('/sepeda', [SepedaController::class, 'index']);
Route::get('/sepeda/tambah', [SepedaController::class, 'create']);
Route::post('/sepeda/simpan', [SepedaController::class, 'store']);
Route::get('/sepeda/edit/{id}', [SepedaController::class, 'edit']);
Route::post('/sepeda/update/{id}', [SepedaController::class, 'update']);
Route::get('/sepeda/hapus/{id}', [SepedaController::class, 'destroy']);

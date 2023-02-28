<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PabrikController;
use App\Http\Controllers\KontribusiController;
use App\Http\Controllers\Pabrik\KontribusiController as PabrikKontribusiController;
use App\Http\Controllers\Pabrik\LokasiController;
use App\Http\Controllers\Pabrik\PabrikController as AdminPabrikController;
use App\Http\Controllers\Pabrik\ProduksiController;
use App\Http\Controllers\Pabrik\SupplierController;
use App\Http\Controllers\Perkebunan\PerkebunanController as AdminPerkebunanController;
use App\Http\Controllers\PerkebunanController;
use App\Http\Controllers\PerundanganController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\TbsController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);
Route::get('perkebunan', [PerkebunanController::class, 'index']);
Route::get('perkebunan-detail/{id}', [PerkebunanController::class, 'show']);
Route::get('pabrik', [PabrikController::class, 'index']);
Route::get('pabrik-detail/{id}', [PabrikController::class, 'show']);
Route::get('kontribusi', [KontribusiController::class, 'index']);
Route::get('sop', [SopController::class, 'index']);
Route::get('perundangan', [PerundanganController::class, 'index']);
Route::get('tbs', [TbsController::class, 'index']);

Route::prefix('admin')->name('admin.')->middleware([])->group(function(){

    // Perkebunan
    Route::resource('perkebunan', AdminPerkebunanController::class)->only(['index', 'create', 'store']);
    Route::get('perkebunan/{perkebunan:id}/{nama}', [AdminPerkebunanController::class, 'show'])->name('perkebunan.show');
    Route::get('perkebunan/{perkebunan:id}/{nama}/edit', [AdminPerkebunanController::class, 'edit'])->name('perkebunan.edit');
    Route::patch('perkebunan/{perkebunan:id}/{nama}', [AdminPerkebunanController::class, 'update'])->name('perkebunan.update');
    Route::delete('perkebunan/{perkebunan:id}/{nama}', [AdminPerkebunanController::class, 'destroy'])->name('perkebunan.destroy');


    // Pabrik
    Route::resource('pabrik', AdminPabrikController::class)->only(['index', 'create', 'store']);
    Route::get('pabrik/{pabrik:id}/{nama}', [AdminPabrikController::class, 'show'])->name('pabrik.show');
    Route::get('pabrik/{pabrik:id}/{nama}/edit', [AdminPabrikController::class, 'edit'])->name('pabrik.edit');
    Route::patch('pabrik/{pabrik:id}/{nama}', [AdminPabrikController::class, 'update'])->name('pabrik.update');
    Route::delete('pabrik/{pabrik:id}/{nama}', [AdminPabrikController::class, 'destroy'])->name('pabrik.destroy');

    Route::post('pabrik/{pabrik:id}/{nama}/lokasi', [LokasiController::class, 'store'])->name('pabrik.lokasi.store');
    Route::patch('pabrik/{pabrik:id}/{nama}/lokasi/{id}', [LokasiController::class, 'update'])->name('pabrik.lokasi.update');
    Route::delete('pabrik/{pabrik:id}/{nama}/lokasi/{id}', [LokasiController::class, 'destroy'])->name('pabrik.lokasi.destroy');

    Route::post('pabrik/{pabrik:id}/{nama}/kontribusi', [PabrikKontribusiController::class, 'store'])->name('pabrik.kontribusi.store');
    Route::patch('pabrik/{pabrik:id}/{nama}/kontribusi/{id}', [PabrikKontribusiController::class, 'update'])->name('pabrik.kontribusi.update');
    Route::delete('pabrik/{pabrik:id}/{nama}/kontribusi/{id}', [PabrikKontribusiController::class, 'destroy'])->name('pabrik.kontribusi.destroy');

    Route::post('pabrik/{pabrik:id}/{nama}/produksi', [ProduksiController::class, 'store'])->name('pabrik.produksi.store');
    Route::patch('pabrik/{pabrik:id}/{nama}/produksi/{id}', [ProduksiController::class, 'update'])->name('pabrik.produksi.update');
    Route::delete('pabrik/{pabrik:id}/{nama}/produksi/{id}', [ProduksiController::class, 'destroy'])->name('pabrik.produksi.destroy');

    Route::post('pabrik/{pabrik:id}/{nama}/supplier', [SupplierController::class, 'store'])->name('pabrik.supplier.store');
    Route::patch('pabrik/{pabrik:id}/{nama}/supplier/{id}', [SupplierController::class, 'update'])->name('pabrik.supplier.update');
    Route::delete('pabrik/{pabrik:id}/{nama}/supplier/{id}', [SupplierController::class, 'destroy'])->name('pabrik.supplier.destroy');
});

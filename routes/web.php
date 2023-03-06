<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PabrikController;
use App\Http\Controllers\KontribusiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Pabrik\KontribusiController as PabrikKontribusiController;
use App\Http\Controllers\Pabrik\LokasiController;
use App\Http\Controllers\Pabrik\PabrikController as AdminPabrikController;
use App\Http\Controllers\Pabrik\ProduksiController;
use App\Http\Controllers\Pabrik\SupplierController;
use App\Http\Controllers\Perkebunan\Kemitraan\KoperasiController;
use App\Http\Controllers\Perkebunan\Kemitraan\PetaniController;
use App\Http\Controllers\Perkebunan\Kontribusi\KontribusiController as PerkebunanKontribusiController;
use App\Http\Controllers\Perkebunan\Legalitas\HguController;
use App\Http\Controllers\Perkebunan\Legalitas\IblhController;
use App\Http\Controllers\Perkebunan\Legalitas\IupController;
use App\Http\Controllers\Perkebunan\Legalitas\IzinLokasiController;
use App\Http\Controllers\Perkebunan\Lokasi\LokasiKebunController;
use App\Http\Controllers\Perkebunan\Lokasi\LokasiPabrikController;
use App\Http\Controllers\Perkebunan\Penanaman\PenanamanController;
use App\Http\Controllers\Perkebunan\Penanaman\PerolehanController;
use App\Http\Controllers\Perkebunan\PerkebunanController as AdminPerkebunanController;
use App\Http\Controllers\Perkebunan\Produksi\PengolahanController;
use App\Http\Controllers\Perkebunan\Produksi\ProduksiController as PerkebunanProduksiController;
use App\Http\Controllers\Perkebunan\Sertifikat\SertifikatController;
use App\Http\Controllers\PerkebunanController;
use App\Http\Controllers\PerundanganController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\TbsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

if(Auth::guest()){
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('authenticate', [LoginController::class, 'authenticate']);
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
}

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function(){

    // Perkebunan
    Route::prefix('perkebunan')->name('perkebunan.')->group(function () {
        Route::resource('', AdminPerkebunanController::class)->only(['index', 'create', 'store']);
        
        Route::prefix('{perkebunan:id}/{nama}')->group(function () {
            Route::get('', [AdminPerkebunanController::class, 'show'])->name('show');
            Route::get('edit', [AdminPerkebunanController::class, 'edit'])->name('edit');
            Route::patch('', [AdminPerkebunanController::class, 'update'])->name('update');
            Route::delete('', [AdminPerkebunanController::class, 'destroy'])->name('destroy');

            Route::prefix('lokasi')->name('lokasi.')->group(function () {
                Route::post('kebun', [LokasiKebunController::class, 'store'])->name('kebun.store');
                Route::patch('kebun/{id}', [LokasiKebunController::class, 'update'])->name('kebun.update');
                Route::delete('kebun/{id}', [LokasiKebunController::class, 'destroy'])->name('kebun.destroy');

                Route::post('pabrik', [LokasiPabrikController::class, 'store'])->name('pabrik.store');
                Route::patch('pabrik/{id}', [LokasiPabrikController::class, 'update'])->name('pabrik.update');
                Route::delete('pabrik/{id}', [LokasiPabrikController::class, 'destroy'])->name('pabrik.destroy');
            });

            Route::prefix('legalitas')->name('legalitas.')->group(function () {
                Route::post('izin-lokasi', [IzinLokasiController::class, 'store'])->name('izin-lokasi.store');
                Route::patch('izin-lokasi/{id}', [IzinLokasiController::class, 'update'])->name('izin-lokasi.update');
                Route::delete('izin-lokasi/{id}', [IzinLokasiController::class, 'destroy'])->name('izin-lokasi.destroy');

                Route::post('iup', [IupController::class, 'store'])->name('iup.store');
                Route::patch('iup/{id}', [IupController::class, 'update'])->name('iup.update');
                Route::delete('iup/{id}', [IupController::class, 'destroy'])->name('iup.destroy');

                Route::post('hgu', [HguController::class, 'store'])->name('hgu.store');
                Route::patch('hgu/{id}', [HguController::class, 'update'])->name('hgu.update');
                Route::delete('hgu/{id}', [HguController::class, 'destroy'])->name('hgu.destroy');

                Route::post('iblh', [IblhController::class, 'store'])->name('iblh.store');
                Route::patch('iblh/{id}', [IblhController::class, 'update'])->name('iblh.update');
                Route::delete('iblh/{id}', [IblhController::class, 'destroy'])->name('iblh.destroy');
            });

            Route::prefix('penanaman')->name('penanaman.')->group(function () {
                Route::post('perolehan-lahan', [PerolehanController::class, 'store'])->name('perolehan-lahan.store');
                Route::patch('perolehan-lahan/{id}', [PerolehanController::class, 'update'])->name('perolehan-lahan.update');
                Route::delete('perolehan-lahan/{id}', [PerolehanController::class, 'destroy'])->name('perolehan-lahan.destroy');

                Route::post('penanaman', [PenanamanController::class, 'store'])->name('penanaman.store');
                Route::patch('penanaman/{id}', [PenanamanController::class, 'update'])->name('penanaman.update');
                Route::delete('penanaman/{id}', [PenanamanController::class, 'destroy'])->name('penanaman.destroy');
            });

            Route::post('produksi', [PerkebunanProduksiController::class, 'store'])->name('produksi.store');
            Route::patch('produksi/{id}', [PerkebunanProduksiController::class, 'update'])->name('produksi.update');
            Route::delete('produksi/{id}', [PerkebunanProduksiController::class, 'destroy'])->name('produksi.destroy');

            Route::post('pengolahan', [PengolahanController::class, 'store'])->name('pengolahan.store');
            Route::patch('pengolahan/{id}', [PengolahanController::class, 'update'])->name('pengolahan.update');
            Route::delete('pengolahan/{id}', [PengolahanController::class, 'destroy'])->name('pengolahan.destroy');

            Route::prefix('kemitraan')->name('kemitraan.')->group(function () {
                Route::post('petani', [PetaniController::class, 'store'])->name('petani.store');
                Route::patch('petani/{id}', [PetaniController::class, 'update'])->name('petani.update');
                Route::delete('petani/{id}', [PetaniController::class, 'destroy'])->name('petani.destroy');

                Route::post('koperasi', [KoperasiController::class, 'store'])->name('koperasi.store');
                Route::patch('koperasi/{id}', [KoperasiController::class, 'update'])->name('koperasi.update');
                Route::delete('koperasi/{id}', [KoperasiController::class, 'destroy'])->name('koperasi.destroy');
            });

            Route::post('kontribusi', [PerkebunanKontribusiController::class, 'store'])->name('kontribusi.store');
            Route::patch('kontribusi/{id}', [PerkebunanKontribusiController::class, 'update'])->name('kontribusi.update');
            Route::delete('kontribusi/{id}', [PerkebunanKontribusiController::class, 'destroy'])->name('kontribusi.destroy');

            Route::post('sertifikat', [SertifikatController::class, 'store'])->name('sertifikat.store');
            Route::patch('sertifikat/{id}', [SertifikatController::class, 'update'])->name('sertifikat.update');
            Route::delete('sertifikat/{id}', [SertifikatController::class, 'destroy'])->name('sertifikat.destroy');
        });
    });

    // Pabrik
    Route::prefix('pabrik')->name('pabrik.')->group(function(){
        Route::resource('', AdminPabrikController::class)->only(['index', 'create', 'store']);
        Route::prefix('{pabrik:id}/{nama}')->group(function(){
            Route::get('', [AdminPabrikController::class, 'show'])->name('show');
            Route::get('edit', [AdminPabrikController::class, 'edit'])->name('edit');
            Route::patch('', [AdminPabrikController::class, 'update'])->name('update');
            Route::delete('', [AdminPabrikController::class, 'destroy'])->name('destroy');
        
            Route::post('lokasi', [LokasiController::class, 'store'])->name('lokasi.store');
            Route::patch('lokasi/{id}', [LokasiController::class, 'update'])->name('lokasi.update');
            Route::delete('lokasi/{id}', [LokasiController::class, 'destroy'])->name('lokasi.destroy');
        
            Route::post('kontribusi', [PabrikKontribusiController::class, 'store'])->name('kontribusi.store');
            Route::patch('kontribusi/{id}', [PabrikKontribusiController::class, 'update'])->name('kontribusi.update');
            Route::delete('kontribusi/{id}', [PabrikKontribusiController::class, 'destroy'])->name('kontribusi.destroy');
        
            Route::post('produksi', [ProduksiController::class, 'store'])->name('produksi.store');
            Route::patch('produksi/{id}', [ProduksiController::class, 'update'])->name('produksi.update');
            Route::delete('produksi/{id}', [ProduksiController::class, 'destroy'])->name('produksi.destroy');
        
            Route::post('supplier', [SupplierController::class, 'store'])->name('supplier.store');
            Route::patch('supplier/{id}', [SupplierController::class, 'update'])->name('supplier.update');
            Route::delete('supplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
        });
    });
    
    Route::get('sop', [SopController::class, 'admin'])->name('sop.index');
    Route::post('sop', [SopController::class, 'store'])->name('sop.store');
    Route::patch('sop/{sop:id}/{jenis}', [SopController::class, 'update'])->name('sop.update');
    Route::delete('sop/{sop:id}/{jenis}', [SopController::class, 'destroy'])->name('sop.destroy');

    Route::get('perundangan', [PerundanganController::class, 'admin'])->name('perundangan.index');
    Route::post('perundangan', [PerundanganController::class, 'store'])->name('perundangan.store');
    Route::patch('perundangan/{perundangan:id}/{nama}', [PerundanganController::class, 'update'])->name('perundangan.update');
    Route::delete('perundangan/{perundangan:id}/{nama}', [PerundanganController::class, 'destroy'])->name('perundangan.destroy');

    Route::get('kontribusi', [KontribusiController::class, 'admin'])->name('kontribusi.index');

    Route::get('tbs', [TbsController::class, 'admin'])->name('tbs.index');
    Route::resource('tbs', TbsController::class)->except(['index']);

    Route::get('admin', [UserController::class, 'admin'])->name('admin.index');
    Route::post('admin', [UserController::class, 'store'])->name('admin.store');
    // Route::post('admin/update/{id}', [UserController::class, 'update'])->name('admin.update');
    Route::delete('admin/destroy/{id}', [UserController::class, 'destroy'])->name('admin.destroy');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

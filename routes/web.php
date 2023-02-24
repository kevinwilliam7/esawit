<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PabrikController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\KontribusiController;
use App\Http\Controllers\PerkebunanController;
use App\Http\Controllers\PerundanganController;
use App\Http\Controllers\Pabrik\PabrikController as AdminPabrikController;
use App\Http\Controllers\Perkebunan\PerkebunanController as AdminPerkebunanController;

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
Route::get('perkebunan', [PerkebunanController::class, 'index']);
Route::get('pabrik', [PabrikController::class, 'index']);
Route::get('kontribusi', [KontribusiController::class, 'index']);
Route::get('perizinan', [PerizinanController::class, 'index']);
Route::get('perundangan', [PerundanganController::class, 'index']);

Route::prefix('admin')->name('admin.')->middleware([])->group(function(){

    // Perkebunan
    Route::resource('perkebunan', AdminPerkebunanController::class)->only(['index', 'create', 'store']);
    Route::get('perkebunan/{perkebunan:id}/{nama}', [AdminPerkebunanController::class, 'show'])->name('perkebunan.show');
    Route::get('perkebunan/{perkebunan:id}/{nama}/edit', [AdminPerkebunanController::class, 'edit'])->name('perkebunan.edit');
    Route::patch('perkebunan/{perkebunan:id}/{nama}', [AdminPerkebunanController::class, 'update'])->name('perkebunan.update');
    Route::delete('perkebunan/{perkebunan:id}/{nama}', [AdminPerkebunanController::class, 'destroy'])->name('perkebunan.destroy');


    Route::resource('pabrik', AdminPabrikController::class);
});

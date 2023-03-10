<?php

use App\Http\Controllers\KontribusiController;
use App\Http\Controllers\Pabrik\KontribusiController as PabrikKontribusiController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PabrikController;
use App\Http\Controllers\Perkebunan\Kontribusi\KontribusiController as PerkebunanKontribusiController;
use App\Http\Controllers\PerkebunanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Datatable Halaman CSR
Route::get('datatable-pabrik-rencana', [KontribusiController::class, 'dtPabrikRencana'])->name('api.dt-pabrik-rencana');
Route::get('datatable-pabrik-realisasi', [KontribusiController::class, 'dtPabrikRealisasi'])->name('api.dt-pabrik-realisasi');
Route::get('datatable-perkebunan-rencana', [KontribusiController::class, 'dtPerkebunanRencana'])->name('api.dt-perkebunan-rencana');
Route::get('datatable-perkebunan-realisasi', [KontribusiController::class, 'dtPerkebunanRealisasi'])->name('api.dt-perkebunan-realisasi');

//Datatable Halaman Perkebunan Tab CSR
Route::get('perkebunan-datatable-rencana/{id}',[PerkebunanController::class, 'dtRencana']);
Route::get('perkebunan-datatable-realisasi/{id}',[PerkebunanController::class, 'dtRealisasi']);
Route::get('perkebunan-datatable-sertifikat/{id}',[PerkebunanController::class, 'dtSertifikat']);

//Datatable Halaman Pabrik
Route::get('pabrik-datatable-rencana/{id}',[PabrikController::class, 'dtRencana']);
Route::get('pabrik-datatable-realisasi/{id}',[PabrikController::class, 'dtRealisasi']);
Route::get('pabrik-datatable-produksi/{id}',[PabrikController::class, 'dtProduksi']);
Route::get('pabrik-datatable-supply/{id}',[PabrikController::class, 'dtSupply']);

Route::get('kecamatan/{kabupaten}', [LokasiController::class, 'kecamatan'])->name('api.kecamatan.index');
Route::get('desa/{kecamatan}', [LokasiController::class, 'desa'])->name('api.desa.index');

Route::get('pabrik/{pabrik:id}/{nama}/kontribusi/{pelaksanaan}', [PabrikKontribusiController::class, 'index'])->name('api.pabrik.kontribusi.index');
Route::get('perkebunan/{perkebunan:id}/{nama}/kontribusi/{pelaksanaan}', [PerkebunanKontribusiController::class, 'index'])->name('api.perkebunan.kontribusi.index');
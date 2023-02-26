<?php

use App\Http\Controllers\KontribusiController;
use App\Http\Controllers\PabrikController;
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
Route::get('datatable-pabrik-rencana', [KontribusiController::class, 'dtPabrikRencana']);
Route::get('datatable-pabrik-realisasi', [KontribusiController::class, 'dtPabrikRealisasi']);
Route::get('datatable-perkebunan-rencana', [KontribusiController::class, 'dtPerkebunanRencana']);
Route::get('datatable-perkebunan-realisasi', [KontribusiController::class, 'dtPerkebunanRealisasi']);

//Datatable Halaman Perkebunan Tab CSR
Route::get('perkebunan-datatable-rencana',[PerkebunanController::class, 'dtRencana']);
Route::get('perkebunan-datatable-realisasi',[PerkebunanController::class, 'dtRealisasi']);
Route::get('perkebunan-datatable-sertifikat',[PerkebunanController::class, 'dtSertifikat']);

//Datatable Halaman Pabrik
Route::get('pabrik-datatable-rencana',[PabrikController::class, 'dtRencana']);
Route::get('pabrik-datatable-realisasi',[PabrikController::class, 'dtRealisasi']);
Route::get('pabrik-datatable-produksi',[PabrikController::class, 'dtProduksi']);
Route::get('pabrik-datatable-supply',[PabrikController::class, 'dtSupply']);

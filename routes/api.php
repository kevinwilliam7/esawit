<?php

use App\Http\Controllers\KontribusiController;
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
Route::get('datatable-pabrik-rencana', [KontribusiController::class, 'dtPabrikRencana']);
Route::get('datatable-pabrik-realisasi', [KontribusiController::class, 'dtPabrikRealisasi']);
Route::get('datatable-perkebunan-rencana', [KontribusiController::class, 'dtPerkebunanRencana']);
Route::get('datatable-perkebunan-realisasi', [KontribusiController::class, 'dtPerkebunanRealisasi']);

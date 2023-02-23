<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerkebunanController;
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

Route::get('/', function () {
    return view('home.public.index');
});
Route::get('/login-esawit', function () {
    return view('auth.index');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('perkebunan', [PerkebunanController::class, 'index']);
Route::get('pabrik', [PabrikController::class, 'index']);
Route::get('kontribusi', [KontribusiController::class, 'index']);

Route::prefix('admin')->name('admin.')->middleware([])->group(function(){
    Route::resource('perkebunan', AdminPerkebunanController::class);
});

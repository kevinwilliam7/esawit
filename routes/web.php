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
Route::resource('perkebunan', PerkebunanController::class);

Route::prefix('admin')->name('admin.')->middleware([])->group(function(){
    Route::resource('perkebunan', AdminPerkebunanController::class);
});

<?php
use App\Http\Controllers\MovieController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
    Route::resource('create', MovieController::class);
    Route::resource('edit/{id}', MovieController::class);
    Route::resource('update/{id}', MovieController::class);
    Route::resource('destroy/{id}', MovieController::class);
    Route::post('/movie/search',[MovieController::class, 'search'])->name('movie.search');

*/
Route::resource('movie', MovieController::class);


<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/towns', [App\Http\Controllers\TownController::class, 'index'])->name('towns');
Route::get('/towns/{town}', [App\Http\Controllers\TownController::class, 'show'])->name('town');
Route::get('/towns/{town}', [App\Http\Controllers\TownController::class, 'show'])->name('town_edit');
Route::patch('/towns/{town}', [App\Http\Controllers\TownController::class, 'show'])->name('town_update');
Route::post('/towns/{town}', [App\Http\Controllers\TownController::class, 'show'])->name('town_destroy');

Route::get('/houses', [App\Http\Controllers\TownController::class, 'index'])->name('houses');
Route::get('/houses/{house}', [App\Http\Controllers\TownController::class, 'show'])->name('house_show');
Route::get('/houses/{house}', [App\Http\Controllers\TownController::class, 'edit'])->name('house_edit');
Route::post('/houses/{house}', [App\Http\Controllers\TownController::class, 'show'])->name('house_post');

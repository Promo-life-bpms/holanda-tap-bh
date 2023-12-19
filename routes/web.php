<?php

use App\Http\Controllers\TapController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [TapController::class, 'index'])->name('index');
Route::get('/tap/{id}', [TapController::class, 'tap'])->name('tap.id');
Route::post('/tap/storage', [TapController::class, 'storage'])->name('tap.storage');
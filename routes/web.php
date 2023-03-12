<?php

use App\Http\Controllers\OrderController;
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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/create', [OrderController::class, 'create'])->name('create');
Route::post('/create', [OrderController::class, 'store'])->name('store.create');

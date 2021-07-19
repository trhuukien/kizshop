<?php

use App\Http\Controllers\Client\HomeController;
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

//Client
Route::get('/', [HomeController::class, 'index'])->name('trang-chu');

Route::get('danh-muc/{slug}', [HomeController::class, 'category'])->name('danh-muc');

Route::get('san-pham/{id}', [HomeController::class, 'proDetail'])->name('chi-tiet-san-pham');

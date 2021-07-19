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

/*=======================Client=======================*/
//Menu
Route::get('/', [HomeController::class, 'index'])->name('trang-chu');
Route::get('bai-viet', [HomeController::class, 'post'])->name('bai-viet');
Route::get('nap-the', [HomeController::class, 'card'])->name('nap-the');
Route::get('lich-su', [HomeController::class, 'history'])->name('lich-su');

Route::get('dich-vu/{slug}', [HomeController::class, 'service'])->name('dich-vu');

Route::get('danh-muc/{slug}', [HomeController::class, 'category'])->name('danh-muc');

Route::get('san-pham/{id}', [HomeController::class, 'proDetail'])->name('chi-tiet-san-pham');

<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);

Route::get('/products/{produk}', [App\Http\Controllers\ProductsController::class, 'products']);

Route::get('/news/{tanggal}', [App\Http\Controllers\NewsController::class, 'news']);

Route::get('/programs/{prog}', [App\Http\Controllers\ProgramController::class, 'programs']);

Route::get('/aboutUs', [App\Http\Controllers\AboutUsController::class, 'about']);

Route::get('/contactUs', [App\Http\Controllers\ContactUsController::class, 'contact']);


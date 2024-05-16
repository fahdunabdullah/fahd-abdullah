<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;


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


    // Route::get('/jenisbarang', [JenisBarangController::class,'index']);
    // Route::get('/jenisbarang/store', [JenisBarangController::class,'index']);
    // Route::get('/jenisbarang/update{id}', [JenisBarangController::class,'index']);
    // Route::get('/jenisbarang/destroy{id}', [JenisBarangController::class,'index']);
});


Route::resource('products', ProductController::class);
Route::resource('brands', BrandController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

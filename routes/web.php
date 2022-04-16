<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->middleware('auth');

Route::resource('admin/konsumen', 'App\\Http\\Controllers\\Admin\KonsumenController')->middleware('auth');;
Route::resource('admin/supplier', 'App\\Http\\Controllers\\Admin\SupplierController')->middleware('auth');;
Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\CategoryController')->middleware('auth');;
Route::resource('admin/purchase', 'App\\Http\\Controllers\\Admin\PurchaseController')->middleware('auth');;
Route::resource('admin/sales', 'App\\Http\\Controllers\\Admin\SalesController')->middleware('auth');;
Route::resource('admin/stok', 'App\\Http\\Controllers\\Admin\StokController')->middleware('auth');;
Route::resource('admin/produk', 'App\\Http\\Controllers\\Admin\ProdukController')->middleware('auth');;
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

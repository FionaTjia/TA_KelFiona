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

Route::resource('admin/konsumen', 'App\\Http\\Controllers\\Admin\KonsumenController');
Route::resource('admin/supplier', 'App\\Http\\Controllers\\Admin\SupplierController');
Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\CategoryController');
Route::resource('admin/produk', 'App\\Http\\Controllers\\Admin\ProdukController');
Route::resource('admin/purchase', 'App\\Http\\Controllers\\Admin\PurchaseController');
Route::resource('admin/sales', 'App\\Http\\Controllers\\Admin\SalesController');
Route::resource('admin/stok', 'App\\Http\\Controllers\\Admin\StokController');
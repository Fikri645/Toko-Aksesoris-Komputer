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


Auth::routes();

Route::livewire('/', 'home')->name('home');
Route::livewire('/products', 'product-index')->name('products');
Route::livewire('/product/kategori/{kategoriId}', 'product-kategori')->name('products.kategori');
Route::livewire('/product/{id}', 'product-detail')->name('products.detail');
Route::livewire('/keranjang', 'keranjang')->name('keranjang');
Route::livewire('/checkout', 'checkout')->name('checkout');
Route::livewire('/history', 'history')->name('history');
Route::get('/admin', 'AdminController@index')->name('admin-page');
Route::get('/admin/product', 'AdminController@product')->name('admin-product');
Route::get('/admin/product/add', 'AdminController@productAdd')->name('admin-product-add');
Route::post('/admin/product/create', 'AdminController@productCreate')->name('admin-product-create');
Route::get('/admin/product/{id}', 'AdminController@productEdit')->name('admin-product-edit');
Route::put('/admin/product/update/{id}', 'AdminController@productUpdate')->name('admin-product-update');
Route::get('/admin/product/{id}/delete', 'AdminController@productDelete')->name('admin-product-delete');

Route::get('/admin/pesanan', 'AdminController@pesanan')->name('admin-pesanan');
Route::put('/admin/pesanan/update/{id}', 'AdminController@pesananUpdate')->name('admin-pesanan-update');

Route::get('/admin/pesanan/{id}', 'AdminController@pesananDetail')->name('admin-pesanan-detail');
